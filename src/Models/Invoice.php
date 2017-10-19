<?php

namespace Hyperized\Wefact\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /**
     * @return string
     */
    public function getStatusText()
    {
        switch($this->Status){
            case 0:
            default:
                return 'Concept factuur';
                break;
            case 1:
                return 'Wachtrij factuur';
                break;
            case 2:
                return 'Verzonden';
                break;
            case 3:
                return 'Deels betaald';
                break;
            case 4:
                return 'Betaald';
                break;
            case 8:
                return 'Creditfactuur';
                break;
            case 9:
                return 'Vervallen';
                break;
        }
    }
}