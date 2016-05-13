(function ($) {
    "use strict";
    var twenty_four_seven_current_cell;
    var twenty_four_seven_mouse_down = false;
    var twenty_four_seven_input;

    function clickTwentyFourSevenCell(event) {
        if (event == null) {
            twenty_four_seven_current_cell = window.event.srcElement;
        } else {
            twenty_four_seven_current_cell = event.target;
        }
        if (twenty_four_seven_current_cell.className == "hour") {
           if(twenty_four_seven_current_cell.tfs_checked===false||twenty_four_seven_current_cell.tfs_checked==undefined)

           {
            twenty_four_seven_current_cell.tfs_checked=true;
            twentyFourSevenSetCell(twenty_four_seven_current_cell.id,event.currentTarget.id);
            twentyFourSevenSetInputValue(event.currentTarget.id);
           }else
           {

            twenty_four_seven_current_cell.tfs_checked=false;
            twentyFourSevenClearCell(twenty_four_seven_current_cell.id,event.currentTarget.id);
            twentyFourSevenSetInputValue(event.currentTarget.id);
           }

            }
        else if(twenty_four_seven_current_cell.className =='day')
        {
            var tdArr = jQuery('#'+event.currentTarget.id).find('#'+twenty_four_seven_current_cell.id).siblings();
            if(twenty_four_seven_current_cell.tfs_checked===false||twenty_four_seven_current_cell.tfs_checked==undefined)
                {

                    twenty_four_seven_current_cell.tfs_checked=true;
                    jQuery.each(tdArr,function(n,cell){
                        twentyFourSevenSetCell(cell.id,event.currentTarget.id);

                    });
                    twentyFourSevenSetInputValue(event.currentTarget.id);

                }else{
                    twenty_four_seven_current_cell.tfs_checked=false;

                    jQuery.each(tdArr,function(n,cell){
                        twentyFourSevenClearCell(cell.id,event.currentTarget.id);

                    });

                    twentyFourSevenSetInputValue(event.currentTarget.id);


                }
        }
        else if(twenty_four_seven_current_cell.className=='hourheader')
        {
            var value = twenty_four_seven_current_cell.innerText;
            var tdArr = jQuery('#'+event.currentTarget.id).find('td[column='+value+']');
            if(twenty_four_seven_current_cell.tfs_checked===false||twenty_four_seven_current_cell.tfs_checked==undefined)
                {

                    twenty_four_seven_current_cell.tfs_checked=true;
                    jQuery.each(tdArr,function(n,cell){
                        twentyFourSevenSetCell(cell.id,event.currentTarget.id);

                    });

                    twentyFourSevenSetInputValue(event.currentTarget.id);

                }else{
                    twenty_four_seven_current_cell.tfs_checked=false;

                    jQuery.each(tdArr,function(n,cell){
                        twentyFourSevenClearCell(cell.id,event.currentTarget.id);

                    });

                    twentyFourSevenSetInputValue(event.currentTarget.id);

                }

           

        }
        else if(twenty_four_seven_current_cell.className=='total')
        {
                var tdArr = jQuery('#'+event.currentTarget.id).find('.hour');
                if(twenty_four_seven_current_cell.tfs_checked===false||twenty_four_seven_current_cell.tfs_checked==undefined)
                {

                    twenty_four_seven_current_cell.tfs_checked=true;
                    jQuery.each(tdArr,function(n,cell){
                        twentyFourSevenSetCell(cell.id,event.currentTarget.id);

                    });

                    twentyFourSevenSetInputValue(event.currentTarget.id);


                }else{
                    twenty_four_seven_current_cell.tfs_checked=false;

                    jQuery.each(tdArr,function(n,cell){
                        twentyFourSevenClearCell(cell.id,event.currentTarget.id);

                    });

                    twentyFourSevenSetInputValue(event.currentTarget.id);

                }

        }

    }
    function twentyFourSevenSetInputValue(table_id)
    {
              var input_id = table_id.replace('-table','');
              twenty_four_seven_input = jQuery('#'+input_id);
              var tdArr = jQuery('#'+table_id).find('.hour');
              var resultArr = new Array();
              jQuery.each(tdArr,function(n,cell)
              {
                if (cell.bgColor!==undefined && cell.bgColor!=="")
                {
                    resultArr.push(cell.id);

                }

              });
              var result ="";
              if(resultArr.length!==0)
              {
                 result = resultArr.join(',');
              }
              twenty_four_seven_input.val(result);

    }

    function overTwentyFourSevenCell(event) {
        if (twenty_four_seven_mouse_down === true) {


            if (event == null) {
                twenty_four_seven_current_cell = window.event.srcElement;
            } else {
                twenty_four_seven_current_cell = event.target;
            }
            if (twenty_four_seven_current_cell.className == "hour") {
                twentyFourSevenSetCell(twenty_four_seven_current_cell.id,event.currentTarget.id);


            }
        }

    }

    function twentyFourSevenMouseUp(event) {
        if(twenty_four_seven_mouse_down==true)
        {
          twenty_four_seven_mouse_down = false;
          twentyFourSevenSetInputValue(event.currentTarget.id);

        }


    }
    // function twentyFourSevenMouseOut(event) {
    //     if(twenty_four_seven_mouse_down==true)
    //     {
    //       twenty_four_seven_mouse_down = false;
    //       console.log("mouseout");
    //     }


    // }

    function twentyFourSevenMouseDown(event) {

        twenty_four_seven_mouse_down = true;
    }

   function twentyFourSevenInitCell(input_id,table_id) {

            var value = jQuery('#'+input_id).val();
            if(value!=="")
            {

                var valueArray = value.split(',');
                jQuery.each(valueArray,function(n,value_el)
                {
                    twentyFourSevenSetCell(value_el,table_id);

                }
                );
            }
    }
    function twentyFourSevenSetCell(cell_id,table_id) {
        var cell = jQuery('#'+table_id).find("#"+cell_id);
        cell.attr('bgColor','#5cb85c');
     }
    function twentyFourSevenClearCell(cell_id,table_id) {
        var cell = jQuery('#'+table_id).find("#"+cell_id);
        cell.attr('bgColor','');
     } 

    jQuery.fn.extend({

        twentyFourSeven: function () {
            var input_id = jQuery(this).attr('ID');
            var id = input_id + "-table";
            twentyFourSevenInitCell(input_id,id);
            document.getElementById(id).onclick = clickTwentyFourSevenCell;
            document.getElementById(id).onmousedown = twentyFourSevenMouseDown;
            // document.getElementById(id).onmouseout = twentyFourSevenMouseOut;
            document.getElementById(id).onmouseup = twentyFourSevenMouseUp;
            // document.addEventListener('mouseup',twentyFourSevenMouseUp);
             // document.getElementById(id).addEventListenser('mouseout',twentyFourSevenMouseOut);
            document.getElementById(id).onmouseover = overTwentyFourSevenCell;

        }
    });
    return this;


}(jQuery))
