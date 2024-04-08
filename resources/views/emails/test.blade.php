
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

</div>