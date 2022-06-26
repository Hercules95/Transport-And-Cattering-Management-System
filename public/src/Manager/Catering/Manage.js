import React,{Component} from 'react';
import axios from 'axios';
import ReactDOM from 'react-dom';
import _ from 'lodash';
import { Button,Label, Dropdown} from 'semantic-ui-react';
import { message } from 'antd';

message.config({
  top: 100,
  duration: 2,
});
const active = [
	{ key: 1, text: 'Delete', value: 1 },
	{ key: 2, text: 'Active', value: 2 },
  ]
const nonActive = [
	{ key: 1, text: 'Delete', value: 1 },
	{ key: 2, text: 'Non-Active', value: 3 },
  ]
class Manage extends Component{
	constructor(){
		super();
        this.state = {
            Catering:[],
       id:'',
           
		}
	}
        componentWillMount()
        {
             axios.get('/GetManager/Catering').then(response => { 
               this.setState({Catering:response.data});      
      });
		 
	}
    componentDidMount(){
       
    }
     

    action(value,id)
    {
          
        if(value == '1')
            {
                axios.get('/Delete/Catering/Manager/'+id).then(response => {
			message.success('Your Detail Has been Deleted');
            axios.get('/GetManager/Catering').then(response => { 
               this.setState({Catering:response.data});      
             });
        });
       
            }
             else if(value == '2')
          {
        axios.get('/Catering/Active/'+id)
		.then(response =>{
			message.success('Your Detail Has been Active')
			axios.get('/GetManager/Catering').then(response => { 
               this.setState({Catering:response.data});      
      });
            	});
            
         }
            else if(value == '3')
          {
        axios.get('/Catering/nonActive/'+id)
		.then(response =>{
			message.success('Your Detail Has been Non-Active')
			axios.get('/GetManager/Catering').then(response => { 
               this.setState({Catering:response.data});      
      });
            	});
            
         }
    }
  
    render(){
	return(	  
        <div>               
      <div className="row">
             <div className="col-sm-12">
                <div className="panel panel-sky">
            
                      <div className="panel-body">
                            <div className="table-responsive">
                               <table className="table">
                    <thead>
                        <tr>
                            <th>Image</th> 				
							<th>Name</th>
							<th>Address</th>
							<th>Price</th>
							<th>Status</th>
                            <th>Active</th>
                        </tr>
                    </thead>
                   	<tbody>
						{this.state.Catering.map((v,i) => {
                          return(
						<tr key={i} className="odd gradeX">
							 <td><img style={{height: 100,width: 100}} src={'/CatteringShopImages/'+v.shop_image}/></td> 
							<td>{v.cname}</td>
							<td>{v.address}</td>
							   
							   <td>{v.price}</td>
							   <td>{v.status === 1 ?   <Label color={'green'} key={'green'}>
                                   {_.capitalize('Active')}
                                 </Label> :   <Label color={'red'} key={'red'}>
                                {_.capitalize('Non-Active')}
                              </Label>}</td>
							   <td> {v.status === 1 ?   <Dropdown text='Action' onChange={(e,data)=> this.action(data.value,v.id)}  options={nonActive} simple item /> : 
							   <Dropdown text='Action' onChange={(e,data)=> this.action(data.value,v.id)} options={active} simple item /> }</td>
						   </tr>
						    )
                       })}
										</tbody>
                </table>
                                     </div>
                               </div>
                            </div>
                         </div>
                </div>           
            </div>
	
)
    }
}
export default Manage;