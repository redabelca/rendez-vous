<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Rendezvous
 *
 * @package App
 * @property string $meetingdate
 * @property string $client
*/
class Rendezvous extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['meetingdate', 'client_id'];
    

    public static function storeValidation($request)
    {
        return [
            'meetingdate' => 'date_format:' . config('app.date_format') . ' H:i:s|max:191|required',
            'client_id' => 'integer|exists:clients,id|max:4294967295|required'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'meetingdate' => 'date_format:' . config('app.date_format') . ' H:i:s|max:191|required',
            'client_id' => 'integer|exists:clients,id|max:4294967295|required'
        ];
    }

    

    /**
     * Set attribute to datetime format
     * @param $input
     */
    public function setMeetingdateAttribute($input)
    {
        if ($input) {
            $this->attributes['meetingdate'] = Carbon::createFromFormat(config('app.date_format') . ' H:i:s', $input)->format('Y-m-d H:i:s');
        }
    }

    /**
     * Get attribute from datetime format
     * @param $output
     *
     * @return string
     */
    public function getMeetingdateAttribute($output)
    {
        if ($output) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $output)->format(config('app.date_format') . ' H:i:s');
        }
    }
    
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id')->withTrashed();
    }
    
    
}
