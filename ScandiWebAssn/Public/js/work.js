// JavaScript/ JQuery code page.

$(function(){


    class proddies{
        showclass(){};
    };
    
    
    $("#productType").on('change', function(){
    
        class showdvd extends proddies{
            showclass(){
            $("#info").html("<h2>DVD</h2>");
            $("#info").append("<label for><b>Size (MB): </b></label><input name = 'sz' id = 'size' type = 'number' pattern = '[0-9]*' required title = 'please provide size in MB'  oninvalid = \"InvalidMsg(this)\" oninput = \"InvalidMsg(this)\">");
            $("#info").append("<p id ='dvddesc'><i>* A type of digital disc for data storage. </i></p>");
            $("#info input").css({"margin-left": "3vw"});
            $("#dvddesc").css({"font-size":"1vw", "margin-left":"9vw", "margin-top":"1vw", "width": "20vw"});
            
           
            }
        };


        class showbooks extends proddies{
            showclass(){
            $("#info").html("<h2>Books</h2>");
            $("#info").append("<label for><b>Weight (KG): </b></label><input name = 'wt' id = 'weight' type = 'number' pattern = '[0-9]*' required title = 'please provide weight in KG' oninvalid = \"InvalidMsg(this)\" oninput = \"InvalidMsg(this)\">");
            $("#info").append("<p id ='bookdesc'><i>* A medium for recording information typically composed of many sheets of paper or similar materials. </i></p>");
            $("#info input").css({"margin-left": "3vw"});
            $("#bookdesc").css({"font-size":"1vw", "margin-left":"9vw", "margin-top":"1vw", "width": "18vw"});

            }
        };


        

        class showfurn extends proddies {
            showclass(){
            $("#info").html("<h2>Furniture</h2>");
            $("#info").append("<label for><b>Height (CM): </b></label><input name = 'ht' id = 'height' type = 'number' pattern = '[0-9]*' required title = 'please provide height in CM' oninvalid = \"InvalidMsg(this)\" oninput = \"InvalidMsg(this)\"><br><br> <label for><b>Width (CM): </b></label><input name = 'wd' id = 'width' type = 'number' pattern = '[0-9]*' required title = 'please provide width in CM' oninvalid = \"InvalidMsg(this)\" oninput = \"InvalidMsg(this)\"><br><br><label for><b>Length (CM): </b></label><input name = 'lt' id = 'length' type = 'number' pattern = '[0-9]*' required title = 'please provide length in CM' oninvalid = \"InvalidMsg(this)\" oninput = \"InvalidMsg(this)\">");
            $("#info").append("<p id ='furndesc'><i>* A movable object intended for use in making rooms or buildings fit for living or working. </i></p>");
            $("#info input").css({"margin-left": "3vw"});
            $("#width").css({"margin-left": "3.5vw"});
            $("#furndesc").css({"font-size":"1vw", "margin-left":"9vw", "margin-top":"1vw", "width": "16vw"});
            
            }

        };
            
       


        var map1 = {
            'dvd' : new showdvd(),
            'books': new showbooks(),
            'furn' : new showfurn()
            };
        
            $.fn.show = function(map1){
                var e = document.getElementById('productType');
                var valy = e.value;
                for (var key in map1){
                    var value1 = map1[key]
                    key = valy;
                    value1 = map1[key]
                    return value1.showclass();
            }
        }

        
            $.fn.show(map1);
              
        
    
    });

    

//Disable Back Button
    
        function removeBack(){
        window.history.forward()
    }
    window.onload = removeBack();
    window.onpageshow = function(e){
        if (e.persisted)
        removeBack();
    }

 });
 
 
 
 //Form validation (Regex pattern)

 
 function InvalidMsg(textbox){
     if (textbox.value === ''){
         textbox.setCustomValidity('Please, submit required data');
     }
     else if (textbox.validity.patternMismatch){
        textbox.setCustomValidity('Please, provide the data of type indicated');
     }

     else {
         textbox.setCustomValidity('');
     }
     return true;
 }

 
