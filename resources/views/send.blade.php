<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Estilos generales de la tabla */
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
      margin-right: 20px;
      
      max-width: 500px;
      max-height: 500px;
  
      
    }
    td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      font-size: 20px;
      
    }
    th {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    font-family: Candara;
    color: white;
    font-size: 20px;
    text-align: center;
    border-radius: 10px;
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,121,37,1) 69%, rgba(0,212,255,1) 100%);
    }
    tfoot { background-color: #2E8B57;
      color: white ;
      font-weight: bolder;
  
    }
    /* Estilos para hacerla responsive */
    @media screen and (max-width: 600px) {
      table, thead, tbody, th, td, tr {
        display: block;
      }
      thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px;
      }
      tr { border: 1px solid #ccc;
           }
      td {
        border: none;
        border-bottom: 1px solid #eee;
        position: relative;
        padding-left: 50%;
        
      }
      td:before {
        position: absolute;
        top: 6px;
        left: 6px;
        width: 45%;
        padding-right: 10px;
        white-space: nowrap;
      }
      h1, span{
        text-align: center;
        font-size: 20px;
        font-weight: bolder;
        
        
      }
      td:nth-of-type(1):before { content: "Columna 1:"; }
      td:nth-of-type(2):before { content: "Columna 2:"; }
    }

    .bordeclass {
    padding: 3px 10px;
    border: green 5px dashed;
    border-top-left-radius: 20px; 
    border-top-right-radius: 20px; 
    
    }

    .bordeclass2 {
    padding: 3px 10px;
    border: green 5px dashed;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    }
    .justificar {
      text-align: justify;
 ;
    }
  </style>

</head>
<body >
<center >
      
  <thead>
    <tr>
      <center><h1 class="bordeclass"><span style="color: green">#PADUAMUN</span>2024</h1></center>
    </tr>
    <tr>  
      <th class="fonttitle" >We have a request from: </th>
    </tr>
  </thead>
  <body>
    <tr>
      <td><strong>Hi, my name is : </strong>{{ $data['name'] }} </td>
    </tr>
    <tr>
      <td><strong>My mobile phone is: </strong> {{ $data['telf'] }} </td>
    </tr>
    <tr>
      <td><strong>My email is: </strong> {{ $data['email'] }} </td>
    </tr>
    <tr>
      <td class="justificar" ><strong>PD. </strong> {{ $data['comment'] }} </td>
    </tr>
  </body>
  <footer>
  <center>
    <h1 class="bordeclass2"><span style="color: green">Follow us </span> </h1>
  </center>
          
  </footer>
</center>

</body>
</html>
