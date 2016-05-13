<?php

namespace allenaware\twentyfourseven;

use yii\web\View;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\InputWidget;
use yii\base\InvalidConfigException;


/**
 * This is just an example.
 * file:///Applications/XAMPP/xamppfiles/htdocs/2jupiter/frontend/runtime/tmp-extensions/yii2-twenty-four-seven-hours-picker
 */
class TwentyFourSeven extends InputWidget
{
    public $day_ids;
    public $lang;
    public function run()
    {
        parent::run();
        $this->registerAssets();
        echo $this->renderInput();
    }

    public function registerAssets()
    {
        $view = $this->getView();
        TwentyFourSevenAsset::register($view);
    }
    public function getDayCode($dayCode)
    {
        if ($this->lang !=='zh')
        {
           return $dayCode;
        }else
        {
            if($dayCode=='Mon')
            {

                return '一';
            }elseif($dayCode=='Tue')
            {

                return '二';
            }elseif($dayCode=='Wed')
            {

                return '三';
            }elseif($dayCode=='Thu')
            {

                return '四';
            }elseif($dayCode=='Fri')
            {

                return '五';
            }elseif($dayCode=='Sat')
            {

                return '六';
            }elseif($dayCode=='Sun')
            {

                return '日';
            }
            else {
               throw new InvalidConfigException("wrong day id config.");
                
            }

        }


    }

    public function renderInput()
    {

        $input_id = $this->options['id'];
        if($this->day_ids===null)
        {
            $this->day_ids=array(
                'Mon'=>['31001','31002','31003','31004','31005','31006','31007','31008','31009','31010','31011','31012',
                '31013','31014','31015','31016','31017','31018','31019','31020','31021','31022','31023','31024'],
                'Tue'=>['32001','32002','32003','32004','32005','32006','32007','32008','32009','32010','32011','32012',
                '32013','32014','32015','32016','32017','32018','32019','32020','32021','32022','32023','32024'],
                'Wed'=>['33001','33002','33003','33004','33005','33006','33007','33008','33009','33010','33011','33012',
                '33013','33014','33015','33016','33017','33018','33019','33020','33021','33022','33023','33024'],
                'Thu'=>['34001','34002','34003','34004','34005','34006','34007','34008','34009','34010','34011','34012',
                '34013','34014','34015','34016','34017','34018','34019','34020','34021','34022','34023','34024'],
                'Fri'=>['35001','35002','35003','35004','35005','35006','35007','35008','35009','35010','35011','35012',
                '35013','35014','35015','35016','35017','35018','35019','35020','35021','35022','35023','35024'],
                'Sat'=>['36001','36002','36003','36004','36005','36006','36007','36008','36009','36010','36011','36012',
                '36013','36014','36015','36016','36017','36018','36019','36020','36021','36022','36023','36024'],
                'Sun'=>['37001','37002','37003','37004','37005','37006','37007','37008','37009','37010','37011','37012',
                '37013','37014','37015','37016','37017','37018','37019','37020','37021','37022','37023','37024'],
                );


        }
        $cellHTML = "";
        foreach ($this->day_ids as $dayCode => $dayIds) {
            $cellHTML.="\n";
            $cellHTML.="<tr>";
            $cellHTML.="\n";
            $cellHTML.='<td id="'.$this->getDayCode($dayCode).'" class="day" >'.$this->getDayCode($dayCode).'</td>';
            $cellHTML.="\n";
            foreach ((array)$dayIds as $idIndex => $id) {

                $hourIndex=$idIndex+1;
                $cellHTML.='<td id="'.$id.'" column="'.$hourIndex.'" class="hour"></td>';
                $cellHTML.="\n";

            }
            $cellHTML.="\n";
            $cellHTML.="<tr>";
            $cellHTML.="\n";



        }

        $containerTemplate = <<< HTML
        <div class="twentyfourseven">
          <table id="$input_id-table" class="table-condensed" border="1" cellpadding="0">
            <tr>
                <th class="total" ></th>
                <th class="hourheader" >1</th>
                <th class="hourheader">2</th>
                <th class="hourheader">3</th>
                <th class="hourheader">4</th>
                <th class="hourheader">5</th>
                <th class="hourheader">6</th>
                <th class="hourheader">7</th>
                <th class="hourheader">8</th>
                <th class="hourheader">9</th>
                <th class="hourheader">10</th>
                <th class="hourheader">11</th>
                <th class="hourheader">12</th>
                <th class="hourheader">13</th>
                <th class="hourheader">14</th>
                <th class="hourheader">15</th>
                <th class="hourheader">16</th>
                <th class="hourheader">17</th>
                <th class="hourheader">18</th>
                <th class="hourheader">19</th>
                <th class="hourheader">20</th>
                <th class="hourheader">21</th>
                <th class="hourheader">22</th>
                <th class="hourheader">23</th>
                <th class="hourheader">24</th>

            </tr>$cellHTML

       </table>

      </div>

HTML;


        $input = Html::activeHiddenInput($this->model, $this->attribute, $this->options);
        $input .= "<br>";
        $js = <<< JS
jQuery('#$input_id').twentyFourSeven();

JS;
        $this->view->registerJs($js, View::POS_READY);

        return $input . $containerTemplate;

    }

}
