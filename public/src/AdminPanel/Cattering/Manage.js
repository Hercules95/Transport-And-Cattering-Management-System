import React,{Component} from 'react';
import axios from 'axios';
import ReactDOM from 'react-dom';
import _ from 'lodash';
import { Button,Label} from 'semantic-ui-react';
import { message } from 'antd';

 message.config({
  top: 100,
  duration: 2,
});
class Manage extends Component{
	constructor(){
		super();
        this.state = {
            cat:[],
            name: '',
            Mobile:'',
            washoom:'',
            bed:'',
            room:'',
            address:'',
            detail_info:'',
            image_one:'',
        	 image_two:'',
             image_three:'',
            f_date:'',
			t_date:'',
			price:'',
			capacity:'',
			 next:'',
         prev:'',
			
           
		}
		
	}
        componentWillMount()
        {
            axios.get('/Catering/getbackend').then(response => { 
               this.setState({cat:response.data.data,
                next:response.data.next_page_url,
                prev:response.data.prev_page_url});      
      });
		 
	}
    componentDidMount(){
       
	}
	confirm(id){
		axios.get('/Delete/Catering/'+id).then(response => {
			message.success('Your Detail Has been Deleted');
             setTimeout(function(){
				
         	 window.location.reload(1);
            },1000);
		});
	}
	Model()
	{
		$(ReactDOM.findDOMNode(this.refs.updateModel)).modal('show');
	}
	next()
    {
        axios.get(this.state.next).then(response => {
            console.log(response);
               this.setState({cat:response.data.data,
                next:response.data.next_page_url,
                prev:response.data.prev_page_url});    
      });
    }
     pre()
    {
        axios.get(this.state.prev).then(response => {
            console.log(response);
               this.setState({cat:response.data.data,
                prev:response.data.prev_page_url,
                next:response.data.next_page_url});    
      });
    }
	
	render(){
	return(	                            
      <div>
           <div className="container-fluid">
			   <div data-widget-group="group1">
				   
								<div className="col-md-12">
	    
						{/*Start table  */}
			<div className="panel panel-sky">
          <div className="panel-body">
             
            <div className="table-responsive">
                <table className="table">
                    <thead>
                        <tr>
                            <th>Shop Image</th> 
							<th>Name</th>
							<th>Address</th>
							<th>Mobile Number</th>
                            <th>Capacity</th>
							<th>Price</th>
							<th>Available Date</th>
                            <th>Status</th>
							<th>Active</th>
                        </tr>
                    </thead>
                   	<tbody>
						{this.state.cat.map((v,i) => {
                          return(
						<tr key={i} className="odd gradeX">
							 <td><img style={{height: 100,width: 100}} src={'/CatteringShopImages/'+v.shop_image}/></td> 
							<td>{v.cname}</td>
							<td>{v.address}</td>
                            <td>{v.mobileno}</td>
							   <td>{v.capacity}</td>
							   <td>{v.price}</td>
							   <td className="center">{v.date}</td>
                               <td>{v.status === 1 ?   <Label color={'green'} key={'green'}>
                                   {_.capitalize('Active')}
                                 </Label> :   <Label color={'yellow'} key={'yellow'}>
                                {_.capitalize('Pending')}
                               </Label>}</td>
							  
							  
							   <td>
        						
								
								<Button.Group>
    						<Button  onClick={this.confirm.bind(this,v.id)} negative>Delete</Button>    	 	<Button.Or />	
    						 <Button positive data-target="#myModel"  onClick={this.Model.bind(this)} data-toggle="model">Update</Button> 
							</Button.Group>
     							 </td>
						   </tr>
						    )
                       })}
										</tbody>
                </table>
				<div className="pagination">
                                	
                                  {this.state.prev === null ? <Button positive className="prev disabled" onClick={this.pre.bind(this)}>Previous</Button>
                                    :<Button className="prev" onClick={this.pre.bind(this)}>Previous</Button>}
                                    {this.state.next == null ? <Button positive className="next disabled" onClick={this.next.bind(this)}>Next</Button>
                                    : <Button className="next" onClick={this.next.bind(this)}>Next</Button>}
                                       
                                   
                        </div>      
            </div>
          </div>
        </div>
						{/*End table  */}
	                 </div>
				</div>
			</div>
			  <div ref={'updateModel'} className="modal fade" id="myModel" tabIndex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">	
 				 <div className="modal-dialog">
					<div className="modal-content">
   					   <div className="modal-header">
    					    <button type="button" className="close" data-dismiss="modal" aria-hidden="true">×</button>
    						    <h2 className="modal-title">Modal title</h2>
    				  </div>
                      </div>
						
			</div> 
		 </div>  
      </div>
							

	
)
    }
}
export default Manage;