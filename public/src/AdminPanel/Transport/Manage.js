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
            t:[],
            name: '',
            Mobile:'',
            // washoom:'',
            // bed:'',
            // room:'',
            // address:'',
            // detail_info:'',
            image:'',
        	 image_second:'',
             image_third:'',
            // f_date:'',
			// t_date:'',
			// price:'', 
			// capacity:'',
			 next:'',
         prev:'',
			
           
		}
		
	}
        componentWillMount()
        {
            axios.get('/Transport/Get').then(response => { 
               this.setState({t:response.data.data,
                next:response.data.next_page_url,
                prev:response.data.prev_page_url});      
      });
		 
	}
    componentDidMount(){
        
	}
	confirm(id){
		axios.get('/Delete/Transport/'+id).then(response => {
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
               this.setState({t:response.data.data,
                next:response.data.next_page_url,
                prev:response.data.prev_page_url});    
      });
    }
     pre()
    {
        axios.get(this.state.prev).then(response => {
            console.log(response);
               this.setState({t:response.data.data,
                prev:response.data.prev_page_url,
                next:response.data.next_page_url});    
      });
    }
	
	render(){
	return(	                            
      <div>
           <div className="container-fluid">
			   <div data-widget-group="group1">
				   <div className="panel-ctrls">
				</div>
								<div className="col-md-12">
	    
						{/*Start table  */}
			<div className="panel panel-sky">
          <div className="panel-body">
            <div className="table-responsive">
                <table className="table">
                    <thead>
                        <tr>
                            <th>First Image</th> 
							
							<th>Name</th>
							 <th>Address</th>
							
							<th>Price</th>
							<th>Available</th>
							<th>Status</th> 
							<th>Active</th>
                        </tr>
                    </thead>
                   	<tbody>
						{this.state.t.map((v,i) => {
                          return(
						<tr key={i} className="odd gradeX">
							 <td><img style={{height: 100,width: 100}} src={'/TransportImage/'+v.submitted_by}/></td> 
							  
							<td>{v.tname}</td>
							 <td>{v.address}</td>
							 
							   <td className="center">{v.price}</td>
							   <td className="center">{v.date}</td>
							    <td>{v.status === 1 ?   <Label color={'green'} key={'green'}>
                                   {_.capitalize('Active')}
                                 </Label> :   <Label color={'yellow'} key={'yellow'}>
                                {_.capitalize('Pending')}
                               </Label>}</td>  
							   <td>
							<Button.Group>
    						<Button  onClick={this.confirm.bind(this,v.tid)} negative>Delete</Button>    						<Button.Or />
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
					<div className="modal-content" style={{width:'200%',marginLeft:-325}}>
   					   <div className="modal-header">
    					    <button type="button" className="close" data-dismiss="modal" aria-hidden="true">×</button>
    						    <h2 className="modal-title">Modal title</h2>
    				  </div>
						<div className="modal-body">
						<div className="panel-body">
						<div className="form-horizontal row-border">
						<div className="form-group">
						<label className="col-sm-1 control-label">Name</label>
						<div className="col-sm-3">
						<input type="text" onChange={(e)=> this.setState({name: e.target.value})} className="form-control"/>
						</div>
						<label className="col-sm-1 control-label">Mobile Number</label>
						<div className="col-sm-3">
						<input type="number" onChange={(e)=> this.setState({Mobile: e.target.value})} className="form-control"/>
						</div>
						<label className="col-sm-1 control-label">No of Rooms</label>
						<div className="col-sm-3">
						<input type="text" onChange={(e)=> this.setState({room: e.target.value})} className="form-control"/>
						</div>
						</div>
						<div className="form-group">
						<label className="col-sm-1 control-label">No of Washrooms</label>
						<div className="col-sm-3">
						<input type="text" onChange={(e)=> this.setState({washroom: e.target.value})} className="form-control"/>
						</div>
						<label className="col-sm-1 control-label">No of beds</label>
						<div className="col-sm-3">
						<input type="text" onChange={(e)=> this.setState({bed: e.target.value})} className="form-control"/>
						</div>
						<label className="col-sm-1 control-label">Address</label>
					    <div className="col-sm-3">
						<textarea onChange={(e)=> this.setState({address: e.target.value})} className="form-control"></textarea>
						</div>
						</div>
						<div className="form-group">
						<label className="col-sm-1 control-label">Capacity</label>
						<div className="col-sm-3">
						<input type="number" onChange={(e)=> this.setState({capacity: e.target.value})} className="form-control"/>
						</div>
						<label className="col-sm-1 control-label">Price</label>
						<div className="col-sm-3">
						<input type="number" onChange={(e)=> this.setState({price: e.target.value})} className="form-control"/>
						</div>
						</div>
						<div className="form-group">
						<label className="col-sm-2 control-label"> From </label>
						<div className="col-sm-2">
							<div className="input-group">
								  <span name="daterangepicker" className="input-group-addon"><i className="fa fa-calendar"></i></span>  
								  <input onChange={(e)=> this.setState({f_date: e.target.value})}  type="date" className="form-control" id="daterangepicker"/>
							</div>
						</div>
						<label className="col-sm-2 control-label">  To </label>
						<div className="col-sm-2">
							<div className="input-group">
								<span name="daterangepicker" className="input-group-addon"><i className="fa fa-calendar"></i></span>
								<input onChange={(e)=> this.setState({t_date: e.target.value})} type="date" className="form-control" id="daterangepicker"/>
							</div>
						</div>
						</div>
						<div className="form-group">
						<label className="col-sm-2 control-label">Detail Information about Farm House</label>
						<div className="col-sm-8">
						<textarea  onChange={(e)=> this.setState({detail_info: e.target.value})} className="form-control"></textarea>
						</div>
						</div>
						<div className="form-group">
						<label className="col-sm-1 control-label">Upload Images</label>
						<div className="col-sm-3">
						<div className="fileinput fileinput-new" style={{width:'100%'}} data-provides="fileinput">
							<div className="fileinput-preview thumbnail mb20" data-trigger="fileinput" style={{width:'100%',height:150}}></div>
							<div>
								<a href="#" className="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
								<span className="btn btn-default btn-file">
                                <span className="fileinput-new">Select image</span>
                                <span className="fileinput-exists">Change</span>
								 <input ref="file" type="file" name="file" 
                              className="upload-file" 
                              id="file"
                              onChange={this.handleChangeImage}
                              required/>
								 </span> 
								
							</div>
						</div>
					</div>
					<div className="col-sm-3">
						<div className="fileinput fileinput-new" style={{width:'100%'}} data-provides="fileinput">
							<div className="fileinput-preview thumbnail mb20" data-trigger="fileinput" style={{width: '100%',height:150}}></div>
							<div>
								<a href="#" className="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
								<span className="btn btn-default btn-file">
                                    <span className="fileinput-new">Select image</span>
                                    <span className="fileinput-exists">Change</span>
									<input ref="file" type="file" name="file" 
                              className="upload-file" 
                              id="file"
                              onChange={this.Image_Two}
                              required/>
									</span>
								
							</div>
						</div>
					</div>
					<div className="col-sm-3">
						<div className="fileinput fileinput-new" style={{width:'100%'}} data-provides="fileinput">
							<div className="fileinput-preview thumbnail mb20" data-trigger="fileinput" style={{width: '100%',height:150}}></div>
							<div>
								<a href="#" className="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
								<span className="btn btn-default btn-file">
                                    <span className="fileinput-new">Select image</span>
                                    <span className="fileinput-exists">Change</span>
									<input ref="file" type="file" name="file" 
                              className="upload-file" 
                              id="file"
                              onChange={this.Image_Three}
                              required/>
									</span>
								
							</div>
						</div>
					</div>
						
						</div>
						</div>
						</div>
						</div>
    				  	<div className="modal-footer">
						<button type="button" className="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" className="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div> 
      </div>
							

	
)
    }
}
export default Manage;