import React,{Component} from 'react';
import axios from 'axios';
import ReactDOM from 'react-dom';
import { message,Button,Select  } from 'antd';
const Option = Select.Option;

const children = [];
 children.push(<Option key={'Wifi'}>{'Wifi'}</Option>);
 children.push(<Option key={'Coffee Shop'}>{'Coffee Shop'}</Option>); 
 children.push(<Option key={'Parking'}>{'Parking'}</Option>);
 children.push(<Option key={'Airport Shuttle'}>{'Airport Shuttle'}</Option>);
 children.push(<Option key={'Bar'}>{'Bar'}</Option>);
 children.push(<Option key={'Guide Service'}>{'Guide Service'}</Option>);
 children.push(<Option key={'Yoga Centre'}>{'Yoga Centre'}</Option>);
 children.push(<Option key={'Ayurveda Centre'}>{'Ayurveda Centre'}</Option>);
 children.push(<Option key={'Payment Mode'}>{'Payment Mode'}</Option>);
 children.push(<Option key={'A/C'}>{'A/C'}</Option>);
 children.push(<Option key={'Conference Hall'}>{'Conference Hall'}</Option>);
 children.push(<Option key={'Health Club'}>{'Health Club'}</Option>);
 children.push(<Option key={'Gym'}>{'Gym'}</Option>);
 children.push(<Option key={'Florist on Request'}>{'Florist on Request'}</Option>);
 children.push(<Option key={'Swimming Pool'}>{'Swimming Pool'}</Option>);
 children.push(<Option key={'Steam Sauna'}>{'Steam Sauna'}</Option>); 
 children.push(<Option key={'Laundry Service'}>{'Laundry Service'}</Option>);
 children.push(<Option key={'Spa'}>{'Spa'}</Option>);
 children.push(<Option key={'Beauty Salon'}>{'Beauty Salon'}</Option>);
 children.push(<Option key={'Sun Beds'}>{'Sun Beds'}</Option>);
 children.push(<Option key={'Business Centre'}>{'Business Centre'}</Option>);
 children.push(<Option key={'Doctor on Call'}>{'Doctor on Call'}</Option>);
 children.push(<Option key={'Massage Centre'}>{'Massage Centre'}</Option>);
 children.push(<Option key={'Taxi Service'}>{'Taxi Service'}</Option>);
 children.push(<Option key={'Handicap Facilities'}>{'Handicap Facilities'}</Option>);
 children.push(<Option key={'Room Service'}>{'Room Service'}</Option>);
 

message.config({
  top: 100,
  duration: 2,
});

 
   
  

class Add extends Component{
	constructor(){
		super();
        this.state = {
			main:[],
			 files:[],
            name: '',
            Mobile:'',
            washoom:'',
            bed:'',
            room:'',
            address:'',
            detail_info:'',
            f_date:'',
			t_date:'',
			price:'',
			capacity:'',
			facilities:'',
			 loading: false,
			iconLoading: false,
		}
	 		this.fileUploads = this.fileUploads.bind(this);
			this.SelectOption = this.SelectOption.bind(this);
	}
        componentWillMount()
        {
	}
    componentDidMount(){
       
	}
	 SelectOption(value) {
	  this.setState({facilities: value});
      console.log(value);
	}
	
    saveData(){
		if(this.state.name === "")
		{
			message.error('Enter Name');
		}
		else if(this.state.Mobile === "") {
			message.error('Enter Mobile Number');
		}
		else if(this.state.address === "") {
			message.error('Enter Address');
		}
		else if(this.state.bed === "") {
			message.error('Enter No of beds');
		}
		else if(this.state.room === "") {
			message.error('Enter No of rooms');
		}
		else if(this.state.washroom === "") {
			message.error('Enter No of washrooms');
		}
		else if(this.state.detail_info === "") {
			message.error('Enter Farm House Details');
		}
		else if(this.state.price === "") {
			message.error('Enter Price');
		}
		else if(this.state.capacity === "") {
			message.error('Enter Capacity');
		}
		else if(this.state.image_one === "") {
			message.error('Select Image');
		}
		else if(this.state.image_three === "") {
			message.error('Select Image');
		}
		else if(this.state.f_date === "") {
			message.error('Enter From Date');
		}
		else if(this.state.t_date === "") {
			message.error('Enter To Date');
		}
		else if(this.state.facilities === "") {
			message.error('Enter facilities');
		}
		
		else {
			 this.setState({ loading: true });
			 this.setState({ iconLoading: true });
         var post = new URLSearchParams();
        post.append('name',this.state.name);
        post.append('mobileno',this.state.Mobile);
        post.append('address',this.state.address);
        post.append('bed',this.state.bed);
        post.append('room',this.state.room);
        post.append('washroom',this.state.washroom);
        post.append('Detail_info',this.state.detail_info);
        post.append('from_Date',this.state.f_date);
		post.append('to_Date',this.state.t_date);
		post.append('price',this.state.price);
		post.append('capacity',this.state.capacity);	
         post.append('image_one',JSON.stringify(this.state.files));
		 post.append('facilities',this.state.facilities);
        axios.post('/Farm/Add',post).then(res => {
			 message.success('Farm House Details Added');
       	 setTimeout(function(){
           window.location.reload(1);
                  },1000);
    
	  });
		 }
	}

	   fileUploads(e){
        var i;
        var _this = this;

        var file = e.target.files;
        for (i = 0; i < file.length; i++){
            var img;
            var reader = new FileReader();
            reader.onloadstart = (upload) => {
                console.log('upload start');
            }
            reader.onprogress = (upload) => {
                console.log(upload.total, upload.loaded);
            }
            reader.onloadend = (upload) => {
               var imgArray =  _this.state.files.slice();
               var url =  {url:upload.target.result}
               imgArray.push(url);
               _this.setState({
                   files : imgArray
               },() => {
                 
               });

            }
            reader.readAsDataURL(file[i]);
		}
	 }

    render(){
	return(	          
		               
         <div className="container-fluid">
                    	<div data-widget-group="group1">
						<div className="panel panel-default" data-widget='{"draggable": "false"}'>
		
						<div className="panel-editbox" data-widget-controls=""></div>
					<div className="panel-body">
						<div className="form-horizontal row-border">
						<div className="form-group">
						<label className="col-sm-1 control-label">Name</label>
							<div className="col-sm-4">
						<input type="text" onChange={(e)=> this.setState({name: e.target.value})} className="form-control"/>
						</div>
						<label className="col-sm-1 control-label">Mobile Number</label>
						<div className="col-sm-4">
						<input type="number" onChange={(e)=> this.setState({Mobile: e.target.value})} min="0" max="12" className="form-control"/>
						</div>
						</div>
						<div className="form-group">
						<label className="col-sm-1 control-label">No of Rooms</label>
						<div className="col-sm-4">
						<input type="text" onChange={(e)=> this.setState({room: e.target.value})} className="form-control"/>
						</div>
						<label className="col-sm-1 control-label">No of Washrooms</label>
						<div className="col-sm-4">
						<input type="text" onChange={(e)=> this.setState({washroom: e.target.value})} className="form-control"/>
						</div>
					</div>
						<div className="form-group">
						<label className="col-sm-1 control-label">No of beds</label>
						 
						<div className="col-sm-4">
						<input type="text" onChange={(e)=> this.setState({bed: e.target.value})} className="form-control"/>
					</div>
					<label className="col-sm-1 control-label">Address</label>
					<div className="col-sm-4">
						<textarea onChange={(e)=> this.setState({address: e.target.value})} className="form-control"></textarea>
					</div>
				</div>
					<div className="form-group">
						<label className="col-sm-1 control-label">Capacity</label>
						<div className="col-sm-4">
						<input type="number" onChange={(e)=> this.setState({capacity: e.target.value})} className="form-control"/>
					</div>
					<label className="col-sm-1 control-label">Price</label>
					<div className="col-sm-4">
						<input type="number" onChange={(e)=> this.setState({price: e.target.value})} className="form-control"/>
					</div>
				</div>
				<div className="form-group">
						<label className="col-sm-2 control-label">Detail Information about Farm House</label>
					<div className="col-sm-8">
						<textarea  onChange={(e)=> this.setState({detail_info: e.target.value})} className="form-control"></textarea>
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
					<label className="col-sm-2 control-label">Enter Facilities</label>
					<div className="col-sm-8">
						 <Select
    					  mode="multiple"
   						  style={{ width: '100%' }}
  						  placeholder="Please select"
   						  onChange={(e) => this.SelectOption(e)}>
    					  {children}
 						 </Select>
					</div>
					</div>
					
				<div className="form-group">
					<label className="col-sm-2 control-label">Upload Images</label>
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
							     
                              onChange={this.fileUploads}
							  multiple
                              required/>
								 </span> 
								
							</div>
						</div>
					</div>
					{/* <div className="col-sm-3">
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
					</div> */}
					{/* <div className="col-sm-3">
						<div className="fileinput fileinput-new" style={{width:'100%'}} data-provides="fileinput">
							<div className="fileinput-preview thumbnail mb20" data-trigger="fileinput" style={{width:'100%',height: 150}}></div>
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
					</div> */}
					
				</div>
			</div>
			<div className="panel-footer">
				<div className="row">
					<div className="col-sm-8 col-sm-offset-2">
						<Button type="primary" icon="plus" loading={this.state.iconLoading} onClick={this.saveData.bind(this)} className="btn-primary btn">Submit</Button>
					</div>
					
				</div>
			</div>
		</div>
	</div>
							</div>
						
 

                            </div>
							

	
)
    }
}
export default Add;