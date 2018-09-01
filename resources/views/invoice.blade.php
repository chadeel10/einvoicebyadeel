@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #5C5053"><h4 style="color: white">Invoice</h4></div>

                <div class="panel-body" style="background-color: #AAA2A4">
                    <form class="form-horizontal" method="POST" action="">

                        <div class="form-group">
                            <div class="col-md-5">

                                <label for="selectlabel"  class="control-label">Select Label</label>
                                    <select id="name" type="dropdown" class="form-control" name="label"  required autofocus>
                                    <option></option>
                                    
                                    </select>
                            </div>

                            <div class="col-md-5">
                               <label for="selectcustomer"  class="control-label">Select Customer</label>
                                    <select id="name" type="dropdown" class="form-control" name="selectcustomer"  required autofocus>
                                    <option></option>
                                    
                                    </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="col-md-5">
                                <label for="summary-ckeditor" class="control-label">Subject</label>
                                 <input id="subject" type="text" class="form-control" name="subject" required autofocus>
                               {{-- <textarea type="textarea" rows="4" id="summary-ckeditor" class="form-control" name="subject" required="autofocus"></textarea>--}}
                            </div>
                            <div class="col-md-5">
                                <div>
                                    <label for="invoicedate" class="control-label">Invoice Date</label>
                                    <input id="invoicedate" type="Date" class="form-control" name="invoicedate" required>
                                 </div>
                                    <div>

                                     <label for="duedate" class="control-label">Due Date</label>

                                    <input id="duedate" type="Date" class="form-control" name="duedate" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm">
                            <table class="table table-bordered" >
                                <thead style="background-color: #BBAFB2">
                                    <tr>
                                        <th>Serial</th>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody style="background-color: #FAEDF0" id="myTable">
                                    <tr>
                                        <td><input type="number" name="serial" id="serial"></td>
                                        <td><input type="text" name="Item" id="Item"></td>
                                        <td><input type="number" name="quantity" id="quantity" oninput="calculate();"></td>
                                        <td><input type="number" name="unitprice" id="unitprice" oninput="calculate();"></td>
                                        <td><input type="number" name="total" id="total"></td>
                                        <td>
                                             <button type="button" onclick="myDeleteFunction(this);" class="btn btn-danger">
                                                 Delete Row
                                            </button>
                                            
                                        </td>
                                    </tr>
                                    </tbody>
                                
                                
                            </table>
                            
                        </div>


                        <div class="form-group">
                            <div class="col-md-7">
                            <label for="terms&condition" class="control-label">Terms & Condition</label>

                            <textarea type="textarea" rows="4" class="form-control" name="terms&Condition"  required autofocus>
                                </textarea>
                            </div>

                            <section>
                                <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script><script>tinymce.
                                    init({selector:'textarea'}); </script>
                            </section>
                        
                            <div class="col-md-3">
                            <label for="total" class="control-label">Total</label>
                            <input type="text" class="form-control" name="total" id="total2" required autofocus>

                            </div>
                            <div class="col-md-3">
                            <label for="discount" class="control-label">Discount</label>
                            <input type="text" class="form-control" name="discount" id="discount" oninput="dis();" required autofocus>

                            </div>
                            <div class="col-md-3">
                            <label for="nettotal" class="control-label">Net Total</label>
                            <input type="text" class="form-control" name="nettotal" id="nettotal" required autofocus>

                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-5">
                            <label for="status" class="control-label">Status</label>
                            <input type="text" class="form-control" name="status" id="status" required autofocus>

                            </div>
                        </div>

                    
                            <div class="col-md-10 " align="right">
                         <button type="button"  class="btn btn-success"> Create </button>
                         <button type="button" class="btn btn-primary"> Cancel </button>
                         <button type="button" onclick="myCreateFunction()" class="btn btn-info">
                                                 Add Row  
                                            </button>
                      </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


<script>
    alert("Hello! I am an alert box!");
    
    function myCreateFunction() {
    var table = document.getElementById("myTable");


    var row = table.insertRow(1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    cell1.innerHTML = cell1.innerHTML + "<input type ='number'>";
    cell2.innerHTML = cell2.innerHTML + "<input type ='text'>";
    cell3.innerHTML = cell3.innerHTML + "<input type ='number'>";
    cell4.innerHTML = cell4.innerHTML + "<input type ='number'  >";
    cell5.innerHTML = cell5.innerHTML + "<input type ='number'>";
    cell6.innerHTML = cell6.innerHTML + "<button type='button' class='btn btn-danger'  onclick='myDeleteFunction(this);'  >Delete Row </button>";
}

function myDeleteFunction(r) {
    var i = r.parentNode.parentNode.rowIndex;
    var I = i-1;
    document.getElementById("myTable").deleteRow(I);
}

 function calculate() {
        var myBox1 = document.getElementById('quantity').value; 
        var myBox2 = document.getElementById('unitprice').value;
        var result = document.getElementById('total'); 
        var myResult = myBox1 * myBox2;
          document.getElementById('total').value = myResult;
          document.getElementById('total2').value = myResult;
      }

      function dis() {
var numVal1 = Number(document.getElementById("total2").value);
var numVal2 = Number(document.getElementById("discount").value) / 100;
var totalValue = numVal1 - (numVal1 * numVal2);
document.getElementById("nettotal").value = totalValue.toFixed(2);
}



</script>


      {{--  <script src="{{ asset ('public/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
            <script>
             CKEDITOR.replace( 'summary-ckeditor' );
            </script>

--}}