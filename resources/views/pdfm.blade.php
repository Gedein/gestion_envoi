<form  align="center" method="" action=""  class="fm">
        <h2>rapport mensuel</h2>
       <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Debit mensuel</th>
                <th>Credit mensuel</th>
                
            </tr>
            </thead>
            <tbody>
                @foreach($rapportm as $rapportms)
                <tr>
                <td>
                
                    <span class='account'> 
                        {{$rapportms->nom}}  <br><br><br>
                      </span> </a>
                      </td>
                     
      
                      <td>
                      
                         <span class='account'> 
                            {{$rapportms->prenom}}  <br><br><br>
                          </span> </a>
                  </td>
                  <td>
                      
                     <span class='account'> 
                        {{$rapportms->debit_m}}  <br><br><br>
                      </span> </a>
              </td>
              <td>
                      
                <span class='account'> 
                    {{$rapportms->credit_m}}<br><br><br>
                 </span> </a>
         </td>
                </tr>
     
        @endforeach
        <tbody>
    </table>
    </div>
       
    </form>
    
        
    
    <style>
    
    *{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    
    h2{
        text-align: center;
        font-size: 18px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color:#118739;
        padding: 30px 0;
    }
    
    /* Table Styles */
    
    .table-wrapper{
        margin: 10px 70px 70px;
        box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
    }
    
    .fl-table {
        border-radius: 5px;
        font-size: 12px;
        font-weight: normal;
        border: none;
        border-collapse: collapse;
        width: 100%;
        max-width: 100%;
        white-space: nowrap;
        background-color: white;
    }
    
    .fl-table td, .fl-table th {
        text-align: center;
        padding: 8px;
    }
    
    .fl-table td {
        border-right: 1px solid #f8f8f8;
        font-size: 12px;
    }
    
    .fl-table thead th {
        color: #ffffff;
        background:  #118739;
    }
    
    
    .fl-table thead th:nth-child(odd) {
        color: #ffffff;
        background: gray;
    }
    
    .fl-table tr:nth-child(even) {
        background: #F8F8F8;
    }
    
    </style>
   
   
</form>