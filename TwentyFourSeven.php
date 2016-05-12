<?php

namespace allenaware\twentyfourseven;

use yii\web\View;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\InputWidget;

/**
 * This is just an example.
 * file:///Applications/XAMPP/xamppfiles/htdocs/2jupiter/frontend/runtime/tmp-extensions/yii2-twenty-four-seven-hours-picker
 */
class TwentyFourSeven extends InputWidget
{
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

    public function renderInput()
    {

        $id = $this->options['id'];
        $containerTemplate = <<< HTML
        <div class="twentyfour">
          <table id="$id-table" class="table-condensed" border="1" cellpadding="0">
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

            </tr>
            <tr>
                <td id="day1" class="day" >一</td>
<td id='31001'column='1' class='hour'></td>
<td id='31002'column='2' class='hour'></td>
<td id='31003'column='3' class='hour'></td>
<td id='31004'column='4' class='hour'></td>
<td id='31005'column='5' class='hour'></td>
<td id='31006'column='6' class='hour'></td>
<td id='31007'column='7' class='hour'></td>
<td id='31008'column='8' class='hour'></td>
<td id='31009'column='9' class='hour'></td>
<td id='31010'column='10' class='hour'></td>
<td id='31011'column='11' class='hour'></td>
<td id='31012'column='12' class='hour'></td>
<td id='31013'column='13' class='hour'></td>
<td id='31014'column='14' class='hour'></td>
<td id='31015'column='15' class='hour'></td>
<td id='31016'column='16' class='hour'></td>
<td id='31017'column='17' class='hour'></td>
<td id='31018'column='18' class='hour'></td>
<td id='31019'column='19' class='hour'></td>
<td id='31020'column='20' class='hour'></td>
<td id='31021'column='21' class='hour'></td>
<td id='31022'column='22' class='hour'></td>
<td id='31023'column='23' class='hour'></td>
<td id='31024'column='24' class='hour'></td>

            </tr>
            <tr>
                <td id="day2" class="day" >二</td>
<td id='32001'column='1' class='hour'></td>
<td id='32002'column='2' class='hour'></td>
<td id='32003'column='3' class='hour'></td>
<td id='32004'column='4' class='hour'></td>
<td id='32005'column='5' class='hour'></td>
<td id='32006'column='6' class='hour'></td>
<td id='32007'column='7' class='hour'></td>
<td id='32008'column='8' class='hour'></td>
<td id='32009'column='9' class='hour'></td>
<td id='32010'column='10' class='hour'></td>
<td id='32011'column='11' class='hour'></td>
<td id='32012'column='12' class='hour'></td>
<td id='32013'column='13' class='hour'></td>
<td id='32014'column='14' class='hour'></td>
<td id='32015'column='15' class='hour'></td>
<td id='32016'column='16' class='hour'></td>
<td id='32017'column='17' class='hour'></td>
<td id='32018'column='18' class='hour'></td>
<td id='32019'column='19' class='hour'></td>
<td id='32020'column='20' class='hour'></td>
<td id='32021'column='21' class='hour'></td>
<td id='32022'column='22' class='hour'></td>
<td id='32023'column='23' class='hour'></td>
<td id='32024'column='24' class='hour'></td>

            </tr>
            <tr>
                <td id="day3" class="day" >三</td>
<td id='33001'column='1' class='hour'></td>
<td id='33002'column='2' class='hour'></td>
<td id='33003'column='3' class='hour'></td>
<td id='33004'column='4' class='hour'></td>
<td id='33005'column='5' class='hour'></td>
<td id='33006'column='6' class='hour'></td>
<td id='33007'column='7' class='hour'></td>
<td id='33008'column='8' class='hour'></td>
<td id='33009'column='9' class='hour'></td>
<td id='33010'column='10' class='hour'></td>
<td id='33011'column='11' class='hour'></td>
<td id='33012'column='12' class='hour'></td>
<td id='33013'column='13' class='hour'></td>
<td id='33014'column='14' class='hour'></td>
<td id='33015'column='15' class='hour'></td>
<td id='33016'column='16' class='hour'></td>
<td id='33017'column='17' class='hour'></td>
<td id='33018'column='18' class='hour'></td>
<td id='33019'column='19' class='hour'></td>
<td id='33020'column='20' class='hour'></td>
<td id='33021'column='21' class='hour'></td>
<td id='33022'column='22' class='hour'></td>
<td id='33023'column='23' class='hour'></td>
<td id='33024'column='24' class='hour'></td>

            </tr>
            <tr>
                <td id="day4" class="day" >四</td>
<td id='34001'column='1' class='hour'></td>
<td id='34002'column='2' class='hour'></td>
<td id='34003'column='3' class='hour'></td>
<td id='34004'column='4' class='hour'></td>
<td id='34005'column='5' class='hour'></td>
<td id='34006'column='6' class='hour'></td>
<td id='34007'column='7' class='hour'></td>
<td id='34008'column='8' class='hour'></td>
<td id='34009'column='9' class='hour'></td>
<td id='34010'column='10' class='hour'></td>
<td id='34011'column='11' class='hour'></td>
<td id='34012'column='12' class='hour'></td>
<td id='34013'column='13' class='hour'></td>
<td id='34014'column='14' class='hour'></td>
<td id='34015'column='15' class='hour'></td>
<td id='34016'column='16' class='hour'></td>
<td id='34017'column='17' class='hour'></td>
<td id='34018'column='18' class='hour'></td>
<td id='34019'column='19' class='hour'></td>
<td id='34020'column='20' class='hour'></td>
<td id='34021'column='21' class='hour'></td>
<td id='34022'column='22' class='hour'></td>
<td id='34023'column='23' class='hour'></td>
<td id='34024'column='24' class='hour'></td>

            </tr>

            <tr>
                <td id="day5" class="day" >五</td>
<td id='35001'column='1' class='hour'></td>
<td id='35002'column='2' class='hour'></td>
<td id='35003'column='3' class='hour'></td>
<td id='35004'column='4' class='hour'></td>
<td id='35005'column='5' class='hour'></td>
<td id='35006'column='6' class='hour'></td>
<td id='35007'column='7' class='hour'></td>
<td id='35008'column='8' class='hour'></td>
<td id='35009'column='9' class='hour'></td>
<td id='35010'column='10' class='hour'></td>
<td id='35011'column='11' class='hour'></td>
<td id='35012'column='12' class='hour'></td>
<td id='35013'column='13' class='hour'></td>
<td id='35014'column='14' class='hour'></td>
<td id='35015'column='15' class='hour'></td>
<td id='35016'column='16' class='hour'></td>
<td id='35017'column='17' class='hour'></td>
<td id='35018'column='18' class='hour'></td>
<td id='35019'column='19' class='hour'></td>
<td id='35020'column='20' class='hour'></td>
<td id='35021'column='21' class='hour'></td>
<td id='35022'column='22' class='hour'></td>
<td id='35023'column='23' class='hour'></td>
<td id='35024'column='24' class='hour'></td>

            </tr>
            <tr>
                <td id="day6" class="day" >六</td>
<td id='36001'column='1' class='hour'></td>
<td id='36002'column='2' class='hour'></td>
<td id='36003'column='3' class='hour'></td>
<td id='36004'column='4' class='hour'></td>
<td id='36005'column='5' class='hour'></td>
<td id='36006'column='6' class='hour'></td>
<td id='36007'column='7' class='hour'></td>
<td id='36008'column='8' class='hour'></td>
<td id='36009'column='9' class='hour'></td>
<td id='36010'column='10' class='hour'></td>
<td id='36011'column='11' class='hour'></td>
<td id='36012'column='12' class='hour'></td>
<td id='36013'column='13' class='hour'></td>
<td id='36014'column='14' class='hour'></td>
<td id='36015'column='15' class='hour'></td>
<td id='36016'column='16' class='hour'></td>
<td id='36017'column='17' class='hour'></td>
<td id='36018'column='18' class='hour'></td>
<td id='36019'column='19' class='hour'></td>
<td id='36020'column='20' class='hour'></td>
<td id='36021'column='21' class='hour'></td>
<td id='36022'column='22' class='hour'></td>
<td id='36023'column='23' class='hour'></td>
<td id='36024'column='24' class='hour'></td>
            </tr>
            <tr>
                <td id="day7" class="day" >日</td>
<td id='37001'column='1' class='hour'></td>
<td id='37002'column='2' class='hour'></td>
<td id='37003'column='3' class='hour'></td>
<td id='37004'column='4' class='hour'></td>
<td id='37005'column='5' class='hour'></td>
<td id='37006'column='6' class='hour'></td>
<td id='37007'column='7' class='hour'></td>
<td id='37008'column='8' class='hour'></td>
<td id='37009'column='9' class='hour'></td>
<td id='37010'column='10' class='hour'></td>
<td id='37011'column='11' class='hour'></td>
<td id='37012'column='12' class='hour'></td>
<td id='37013'column='13' class='hour'></td>
<td id='37014'column='14' class='hour'></td>
<td id='37015'column='15' class='hour'></td>
<td id='37016'column='16' class='hour'></td>
<td id='37017'column='17' class='hour'></td>
<td id='37018'column='18' class='hour'></td>
<td id='37019'column='19' class='hour'></td>
<td id='37020'column='20' class='hour'></td>
<td id='37021'column='21' class='hour'></td>
<td id='37022'column='22' class='hour'></td>
<td id='37023'column='23' class='hour'></td>
<td id='37024'column='24' class='hour'></td>

            </tr>
       </table>

      </div>

HTML;


        $input = Html::activeHiddenInput($this->model, $this->attribute, $this->options);
        $input .= "<br>";
        $js = <<< JS
jQuery('#$id').twentyFourSeven();

JS;
        $this->view->registerJs($js, View::POS_READY);

        return $input . $containerTemplate;

    }

}
