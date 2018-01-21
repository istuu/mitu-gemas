<?php
namespace App\Libraries;
use Wa;
use Mail;
use URL;
Class Mailer {
    public function actionMail($model,$type){
        $template = Wa::model('email_template')->where('type',$type)->firstOrFail();
        $template['description'] = $this->actionReplace($model,$template->description);
        Mail::send('emails.base' , [
              'template'  => $template,
              'model' => $model,
        ],function($m) use ($model, $template){
              $m->from($template->from_email, $template->from_name);
              $m->subject($template->subject);
              $m->to($model->email);
        });
    }

    public function actionMailAdmin($model,$type,$subject){
        foreach (Wa::model('email_recipient')->where('is_active',1)->get() as $admin) {
            Mail::send('emails.admin.'.$type , [
                  'model' => $model,
                  'admin' => $admin
            ],function($m) use ($model, $admin, $subject){
                  $m->from('noreply@acsjakarta.sch.id', 'ACS Jakarta Web Mailer');
                  $m->subject($subject);
                  $m->to($admin->email);
            });
        }
    }

    public function actionReplace($model,$description){
        $before = array("{{name}}", "{{prize}}");
        $after  = array($model->name, $model->prize);
        $newphrase = str_replace($before, $after, $description);
        return $newphrase;
    }
}
