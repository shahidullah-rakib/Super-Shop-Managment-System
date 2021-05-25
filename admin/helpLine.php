<?php include('menu.php'); ?>

    <!--Menu Contact Section starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Help Line</h1> 

            </br></br></br>

            <table class='tbl-full'>
		        <tr>
                    <th>Name </th>
                    <th>Email </th>
                    <th>Messages </th>
                    
                    
		        </tr>
	
		        
				<tr>
                <tbody id="data"> </tbody>              
                </tr>
						
				</table>
            
            

        </div>
    </div>

    <!--Menu Contact Section ends -->

    <script>
        //call ajex
        var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "../model/data.php";
        var asynchronous = true;

        ajax.open(method, url, asynchronous);
        //sending ajex request
        ajax.send();

        //receiveing responce from data.php
        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
                //alert(this.responseText);
                //converting json back to array
                var data = JSON.parse(this.responseText);
                console.log(data); //for debugging

                //html value for<tbody>
                var html = "";
                //looping through the data
                for(var a = 0; a < data.length; a++) {
                    var name = data[a].name;
                    var email = data[a].email;
                    var message = data[a].message;

                    //stroing at html
    
                    html += "<tr>";
                        html += "<td>" + name + "</td>";
                        html += "<td>" + email + "</td>";
                        html += "<td>" + message + "</td>";
                        
                        
                    html += "</tr>";
            }
            document.getElementById("data").innerHTML += html;
        }
    }


    </script>

    <?php include('footer.php'); ?>