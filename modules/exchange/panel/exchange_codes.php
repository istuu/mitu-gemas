<?php
$this->start = request()->start;
$this->end  = request()->end;
return [
        'type' => 'listing',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'create_on' => [
                                    'title' => 'Submitted At'
                                ],
                                'name',
                                'email',
                                'phone',
                                'gender',
                                // 'province.name as province' => [
                                //         'title' => 'Province',
                                //         'on' => ['prvncs.id','=','xchngcds.province_id']
                                // ],
                                // 'regencies.name as regency' => [
                                //         'title' => 'Regency',
                                //         'on' => ['rgncs.id','=','xchngcds.city_id']
                                // ],
                                'vouchers.unique_code' => [
                                        'title' => 'Unique Code',
                                        'on' => ['vchrs.id','=','xchngcds.voucher_id']
                                ],
                                'vouchers.prize' => [
                                        'title'=>'Prize',
                                        'on' => ['vchrs.id', '=', 'xchngcds.voucher_id']
                                ],
                                'id' => [
                                        'title' => 'Status',
                                        'modifier' => function($value){
                                            $model = Wa::model('exchange_code')->find($value);
                                            if($model->status == 'valid'){
                                                return "<a class='btn btn-xs btn-block btn-success' id='$model->id' onclick='showModalStatus(this.id)'>".strtoupper($model->status)."</a>";
                                            }else{
                                                return "<a class='btn btn-xs btn-block btn-info' id='$model->id' onclick='showModalStatus(this.id)'>".strtoupper($model->status)."</a>";
                                            }
                                        }
                                ],
                        ],

                ],
                'where' => function($q){
                        $query = $q;
                        if(isset($this->start) && $this->start !== ''){
                            $query = $query->where('xchngcds.create_on','>=',date('Y-m-d H:i:s',strtotime($this->start)));
                        }
                        if(isset($this->end) && $this->end !== ''){
                            $query = $query->where('xchngcds.create_on','<=',date('Y-m-d H:i:s',strtotime($this->end)));
                        }
                        return $query;
                },
                'data-tables' => true,
                'pagination' => null
        ],
        'actions' => [
                'export'=>[
                        'label'=>'Export',
                        'permalink'=>true,
                        'placement'=>'header',
                        'id'=>'btn-export',
                ],
                'detail'=>[
                        'icon' => 'fa-list',
                        'permalink'=>true,
                ],
                // 'delete'
        ]
];
