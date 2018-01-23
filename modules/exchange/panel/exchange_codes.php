<?php
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
                                // 'id' => [
                                //         'title'=>'',
                                //         'modifier' => function($value){
                                //             $model = Wa::model('exchange_code')->find($value);
                                //             if($model->vouchers->type == 'pulsa'){
                                //                 if($model->status == 'valid'){
                                //                     $button = "<a class='btn btn-xs btn-block btn-primary'><span class='fa fa-paper-plane'></span> Kirim Pulsa</a>";
                                //                 }else{
                                //                     $button = "<a class='btn btn-sm btn-block btn-primary'><span class='fa fa-paper-plane'></span>Resend Pulsa</a>";
                                //                 }
                                //             }else{
                                //                 if($model->status == 'confirm'){
                                //                     $button = "<a class='btn btn-xs btn-block btn-primary'><span class='fa fa-check'></span> Konfirmasi</a>";
                                //                 }elseif($model->status == 'verified'){
                                //                     $button = "<a class='btn btn-xs btn-block btn-primary'><span class='fa fa-check'></span> Verifikasi</a>";
                                //                 }elseif($model->status == 'sent'){
                                //                     $button = "<a class='sbtn btn-xs btn-block btn-primary'><span class='fa fa-check'></span> Kirim</a>";
                                //                 }else{
                                //                     $button = "<a class='sbtn btn-xs btn-block btn-primary'><span class='fa fa-check'></span> Valid</a>";
                                //                 }
                                //             }
                                //             return $button;
                                //         }
                                // ],
                        ]
                ],
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
