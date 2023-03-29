@extends('layouts.master')
@section('content')
<div class="content-page" style="justify-content: center;">
    <div class="content">
        <!DOCTYPE html>
        <html>
        
           <head>
              <title>HTML Table</title>
           </head>
            @php
                // print_r($education);
            @endphp
           <body>
              <table border = "1" width = "100%">
                 <thead>
                    <tr>
                       <td>Exam</td>
                       <td>Result</td>
                       <td>This is the head of the table</td>
                       <td>This is the head of the table</td>
                    </tr>
                 </thead>
                 
                 <tfoot>
                    <tr>
                       <td colspan = "4">This is the foot of the table</td>
                    </tr>
                 </tfoot>
                 
                 <tbody>
                    @foreach ($education as $item)
                     <tr>
                       <td>{{ $item->exam }}</td>
                       <td>{{ $item->result }}</td>
                       <td>{{ $item->exam }}</td>
                       <td>fds</td>
                    </tr>
                    @endforeach
                 </tbody>
                 
              </table>
           </body>
            
        </html>
        Educations
        <!DOCTYPE html>
<html>

   <head>
      <title>HTML Table</title>
   </head>
	
   <body>
      <table border = "1" width = "100%">
         <thead>
            <tr>
               <td >This </td>
            </tr>
         </thead>
         
         <tfoot>
            <tr>
               <td colspan = "4">This is the foot </td>
            </tr>
         </tfoot>
         
         <tbody>
            
            <tr>
               <td>
                 {{ $applicants->present_address }}
               </td>
               <td>Cell 2</td>
               <td>Cell 3</td>
               <td>Cell 4</td>
            </tr>
         </tbody>
         
      </table>
   </body>
	
</html>
    </div>
</div>
@endsection
