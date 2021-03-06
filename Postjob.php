
<html>
    <head>
        <title>
    
        </title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <style>
           
            #reda{
                border-right: 2px solid #C9C9C9;
            }
            
            .form-control:focus {
                border-color: #FFC107;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 193, 7, 0.6);
                }
            .custom-file-label:focus{
                border-color: #FFC107;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 193, 7, 0.6);
                
                
            }
            #blue{
                background-color: #FFC107;
                height:410px;
                
            }
            #box{
                background-color: #FFFFFF;
                border-left: 2px solid #EAE0E0;
                border-right: 2px solid #EAE0E0;
                border-top: 2px solid #EAE0E0;
               
                
                margin-top: 10px;
                position: relative;
                top:-180px;
                width:810px;
                border-radius: 1%;
            }
            
            .btn{
                margin-top: 15px;
            }
            
            .skills{
                display: none;
                
            }
            .pjt{
                position: relative;
                left:75px;
                top:50px;
                color: floralwhite;
            }
        
            label{
                padding-top:20px;
                padding-left:10px;
            }
            #final_post{
                position: relative;
                top:-120px;
            }
           
        
        
        </style>
        <script>
        
        
        
        
        
        </script>
    
    
    
    </head>
    <body>
            <div id="blue" ><div class="container pjt" autofocus><a autofocus></a><h1 class="pjt">Post a job</h1><p class="pjt">Tell us What we can do</p></div></div>
            <div id="white">
                    <form method="post">
                        <div class="container" id="box">
                            
                                <div id="job">
                                <label><h4>Job Title</h4>
                                <p class="text-muted">Choose a title that best describes your project</p></label>
                                <input type="text" placeholder="Job Title" class="form-control" id="jt" >
                                <label><h4>Job Details</h4>
                                    <p class="text-muted">Describe what your project should do</p></label>
                                <textarea placeholder="Job Details" class="form-control form-control-lg"  pattern=".{50,}" id="jd"></textarea>
                                <p class="text-muted text-right"> Minimum 50 characters</p>
                                <div class="custom-file">
                                <input type="file" class="custom-file-input form-control" id="customFile" multiple>
                                <label class="custom-file-label form-control" for="customFile">Choose file</label>
                                </div>
                                <div id="1btn"> 
                                
                                <p class="btn btn-warning" id="btn1" >Next</p>
                                </div>
                                </div>
                                <div id="skills" style="display:none;">
                                <label><h4>Category  </h4></label>
                                <select class="custom-select custom-select-sm form-control" id="jc" >
                                  <option selected>Category</option>
                                  <option value="Web_Software_ITdevelopment">Web Software IT Development</option>
                                  <option value="other value">other value</option>
                                </select>    
                                <label><h3>SubCategory</h3></label>
                                    

                                <select class="custom-select custom-select-sm form-control" id="jsc">
                                  <option selected>Sub-Category</option>
                                  <option value="Web_development">Web Development</option>
                                  <option value="Software_development">Software Development</option>
                                  <option value="other value">other value</option>
                                </select>
                                <p class="text-muted text-right">Enter sub category of your project </p>

                                        
                                <label><h4>Skills Required for project</h4></label>
                                <input type="text" placeholder="Eg.HTML CSS ..." class="form-control" list="skills" id="jsk">
                                <p class="text-muted text-right">Enter 5 skills that may help the part timer develop your project </p>
                                <p class="btn btn-warning" id="btn2" >Next</p>
                                </div>
                                <div id="paymentMethod" style="display:none;">
                                 <p class="btn btn-warning form-inline" id="fr"  >Fixed Rate</p><p class="btn btn-warning form-inline" id="pm" >Pay by MileStone</p><input type="hidden" id="paymentType" >
                                </div>
                                <div id="budget"class="form-row" style="display:none;">
                               
                                    <div class="row">
                                        <div class="col">
                                            <select class="custom-select custom-select-sm form-control ">
                                                <option selected></option>
                                                <option value="INR">INR</option>
                                  
                                                <option value="other value">other value</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                             <select class="custom-select custom-select-sm form-control float-left" id="frm" style="display:none;">
                                                    <option selected>Fixed budget</option>
                                                    <option value="small">Small</option>
                                                    <option value="medium">Medium</option>
                                                    <option value="other value">other value</option>
                                             </select>
                                        </div>
                                        <div class="col">
                                            <select class="custom-select custom-select-sm form-control float-left " style="display:none;" id="pmm">
                                                <option selected>Per Milestone</option>
                                                <option value="basic">Basic</option>
                                                <option value="complex">Complex</option>
                                                <option value="other value">other value</option>
                                            </select>
                                             
                                        </div>
                                    </div>
                                 <p class="btn btn-warning" id="btn3" >Submit</p>
                                
                                </div>
                           
                
                
                
                
                
                
                        </div>
            
                         <div  class="card container " id="final_post" style="display:none;">
                             <div class="card-title"><h4 class="card-title">Is This What You Want ?</h4></div>
                                    <div class="card-body row">
                                        <div class="col-3"id="reda">
                                        <h6 class="card-title" id="Job_type"></h6>
                                        <h6 class="card-title" id="Job_category"></h6>
                                        <p class="card-text"id="Skills_required"></p>
                                        </div>
                                        <div class="col-9">
                                        <h5 class="card-title" id="Job_title"></h5>
                                        <p class="card-text" id="Job_discription"></p>
                                        
                                        
                                
                                
                                <button type="submit"  class="btn btn-sml btn-warning pull-right"  name="submit" value="PostJob">Yes Post My Job</button>
                                </div>
                                 </div>
                                </div>

                                
                                </form>
            
        
        
            
        
            
        
            </div>
        
    
    
    
    
        <script>
        $("#btn1").click(function(){
             
            document.getElementById("Job_title").innerHTML=document.getElementById("jt").value;
            document.getElementById("Job_discription").innerHTML=document.getElementById("jd").value;
            
            
            $("#btn1").css("display","none");
            $("#skills").css("display","block");
        })
        $("#btn2").click(function(){
            document.getElementById("Job_category").innerHTML=document.getElementById("jc").value;
             document.getElementById("Skills_required").innerHTML=document.getElementById("jsk").value;
            $("#btn2").css("display","none");
            $("#paymentMethod").css("display","block");
        })
        $("#fr").click(function(){
            $("#fr").css("display","none");
            $("#pm").css("display","none");
            $("#paymentType").val("fixedPay");
            document.getElementById("Job_type").innerHTML=document.getElementById("paymentType").value;
            $("#budget").css("display","block");
            $("#frm").css("display","block");
            $("#box").css("border-bottom","2px solid #EAE0E0");
        })
        $("#pm").click(function(){
            $("#pm").css("display","none");
            $("#fr").css("display","none");
            $("#paymentType").val("milestonePay");
             document.getElementById("Job_type").innerHTML=document.getElementById("paymentType").value;
            $("#budget").css("display","block");
            $("#pmm").css("display","block");
            $("#pmm").css("float","left");
            $("#box").css("border-bottom","2px solid #EAE0E0");
        })
        $("#btn3").click(function(){
            $("#final_post").css("display","block");
        })
        
        </script>    
    
    
    
    
    
    
    </body>







</html>