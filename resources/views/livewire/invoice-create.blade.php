<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
  
</head>
<body>

    <div>
        <div class="row">
            <div class="col-md-12 ">
                <table class="table p-0 m-0">
                    <tbody>
                        <tr>
                            <td class="m-0">
                                <img class="m-0 p-0" src="{{asset('logo')}}/maakview.png" width="200" height="50" alt="Logo"> 
                            </td>
                            <td class="ml-0">
                                <p class="office_address text-right" style="font-size: 15px">
                                    www.maakview.com <br>
                                    Rahima Plaza(6th Floor),<br>
                                   <span style="display: block; padding-bottom:10px"> 82/3 Laboratory Road, Dhaka-1205 <br>Phone: +8801888-012727, +8801886-531777, +880244613763</span>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <h2 class="text-center" style="text-decoration: underline;margin-bottom: 50px;">CHALLAN</h2>
        </div>

           
    </div>

    <footer class="footer" style=" width: 100%;text-align: center;">
        <div class="mb-0 mt-0 pb-0  pt-0 d-flex justify-content-between">
            <ul class="mb-2" style="margin-left: 0px;padding-left: 5px">
                <li>..........................................</li>
                <li>Customer Signatures</li>
            </ul>
            <div class="mb-2" style="margin-left: 0" >
                <ul style="list-style-type:none; margin:0;padding-left:0">
                    <li>.....................................</li>
                    <li>For Maakview</li>
                </ul>
               
            </div>
        </div>
        <div class="mb-0 ml-0 mt-0 pb-0  pt-0 d-flex justify-content-between" style="background: #553eda;">
            <ul  style="list-style-type:none; padding-top:10px; margin:0; padding-left:10;">
                <li class="text-white">82/3 Laboratory Road, Dhaka-1205.</li>
            </ul>
            <div class="pt-2" >
                <ul style="list-style-type:none; ">
                    <li class="text-white">PHONE: +8801888-012727</li>
                </ul>
                
            </div>
            <div class="pt-2  mr-1" >
                <ul style="list-style-type:none;padding-right:10px; ">
                    <li class="text-white">EMAIL: maakview.info@gmail.com</li>
                </ul>
            </div>

          

           
        </div>

      

    </footer>
    

    

    











    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script type="text/javascript">
        try {
            
            if( $(document).height() > 1100 ){
                $('.footer').css('position','inherit');
                $('.footer').css('padding-top','50px');
                $('.footer').css('clear','both');
            }else{
                $('.footer').css('position','fixed');
                $('.footer').css('bottom','0');
                $('.footer').css('clear','both');
            }

            this.print();
            
    
        } catch (e) {
            window.onload = window.print;
        }
        window.onbeforeprint = function() {
            setTimeout(function() {
                window.close();
            }, 1500);
        }

    </script>
</body>
</html>
</div>
