<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 1/24/2017
 * Time: 6:20 PM
 */

namespace App\Http\Controllers\Panel\Helper;


use DB;
use Wa;
use App\Http\Controllers\Panel\BaseController;

class ActivenessController extends BaseController
{
    public function actionGetIndex()
    {
        $id = $this->getParam(1);
        $activeness = (int)$this->getParam(2);

        if (is_numeric($id)) {
            $mgr = Wa::table($this->panel->getTable());
            $row = DB::table($this->panel->getTable())
                    ->select()
                    ->where($mgr->primaryColumn()->getName(), $id)
                    ->first();

            if (null === $row) {
                return $this->actionGetForbidden();
            } elseif (DB::table($this->panel->getTable())
                    ->where($mgr->primaryColumn()->getName(), $id)
                    ->update(['is_active' => 1 === $activeness ? 0 : 1])
            ) {
                $act = $activeness ? 'deactivated' : 'activated';
// Log history
                Wa::instance('manager.cms.history')->record($this->admin, $act,
                        Wa::table($this->panel->getTable()), (array)$row);

                $this->setTransactionMessage(Wa::trans('webarq::core.messages.success-update'), 'success');
            } else {
                $this->setTransactionMessage(Wa::trans('webarq::core.messages.invalid-update'), 'warning');
            }
        }

        if(request()->segment(5) === 'menus'){
            $this->checkChildActive($row,$id);
        }

        return redirect(Wa::panel()->listingURL($this->panel));
    }

    public function checkChildActive($row,$id)
    {
        if($row->is_active == 1){
            $has_child = Wa::model('menu')->select('id','is_active')->where('parent_id',$id)->get();
            Wa::model('menu')
                ->whereIn('id', array_pluck($has_child, 'id'))
                ->update(['is_active' => 0]);
            foreach ($has_child as $child) {
                $grand_child = Wa::model('menu')->select('id','is_active')->where('parent_id',$child->id)->get();
                Wa::model('menu')
                    ->whereIn('id', array_pluck($grand_child, 'id'))
                    ->update(['is_active' => 0]);
            }
            return "OK";
        }else{
            $has_child = Wa::model('menu')->select('id','is_active')->where('parent_id',$id)->get();
            Wa::model('menu')
                ->whereIn('id', array_pluck($has_child, 'id'))
                ->update(['is_active' => 1]);
            foreach ($has_child as $child) {
                $grand_child = Wa::model('menu')->select('id','is_active')->where('parent_id',$child->id)->get();
                Wa::model('menu')
                    ->whereIn('id', array_pluck($grand_child, 'id'))
                    ->update(['is_active' => 1]);
            }
            return "OK";
        }
    }
}
