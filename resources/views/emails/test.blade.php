
<div style="width: 500ox;
            margin: auto;
            padding: 15px;

            text-align: center;
            background :blue"
            >   
            <div>
                <p>{{Auth::user()->fullname}}</p> <p>signed up for this tour</p>
            </div> 
            <div> 
           <p>Mountain :{{$join->mountain->name}}</p>
        </div> 
        <div>
           <p>Information :{{$join->infomation}}</p>
        </div> 
        <div>
            <p>DateTime :{{$join->date}}</p>
        </div>
        <div>
        </div>
            text-align: center;">
    <table  border= "1"  cellpadding= "0"  cellspacing= "0"  width= "100%" >
        <tr>

        <tr>
         <td  style= "padding: 20px 0 30px 0;" >
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.
         </td>
        </tr>
        <tr>
         <td>
          Row 3
         </td>
        </tr>
       </table>

</div>