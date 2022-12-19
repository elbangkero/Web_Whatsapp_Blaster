<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $primaryKey = 'config_id';
    protected $table = 'whatsapp_config';
    protected $fillable = [
        'campaign_name',   'status',   'triggerstatus',   'cron_expression',   'sending', 'data_source', 'data_leads',
    ];
}
