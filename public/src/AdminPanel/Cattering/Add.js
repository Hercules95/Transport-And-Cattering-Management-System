import React,{Component} from 'react';
import axios from 'axios';
import ReactDOM from 'react-dom';
import { message,Button,Select  } from 'antd';

// const dishes = [];


//  dishes.push(<Select.Option key={'Chicken Biryani '}>{'Chicken Biryani '}</Select.Option>);
//  dishes.push(<Select.Option key={'Chicken Qorma'}>{'Chicken Qorma'}</Select.Option>); 
//  dishes.push(<Select.Option key={'Taftan & Nan'}>{'Taftan & Nan'}</Select.Option>);
//  dishes.push(<Select.Option key={'Raita & Salad'}>{'Raita & Salad'}</Select.Option>);
//  dishes.push(<Select.Option key={'Mutton Biryani'}>{'Mutton Biryani'}</Select.Option>);
//  dishes.push(<Select.Option key={'Mutton Kunna'}>{'Mutton Kunna'}</Select.Option>);
//  dishes.push(<Select.Option key={'Mutton Qorma'}>{'Mutton Qorma'}</Select.Option>);

// const Desserts = [];
// // Desserts
//  Desserts.push(<Select.Option key={'Fruit Trifle'}>{'Fruit Trifle'}</Select.Option>);
//  Desserts.push(<Select.Option key={'Cream Caramel'}>{'Cream Caramel'}</Select.Option>);
//  Desserts.push(<Select.Option key={'Suji Ka Halwa '}>{'Suji Ka Halwa '}</Select.Option>);
//  Desserts.push(<Select.Option key={'Loki Ka Halwa'}>{'Loki Ka Halwa'}</Select.Option>);
//  Desserts.push(<Select.Option key={'Gajar Ka Halwa'}>{'Gajar Ka Halwa'}</Select.Option>);
//  Desserts.push(<Select.Option key={'Shahi Kheer'}>{'Shahi Kheer'}</Select.Option>);
//  Desserts.push(<Select.Option key={'Shahi Tukra'}>{'Shahi Tukra'}</Select.Option>);
//  Desserts.push(<Select.Option key={'Firni'}>{'Firni'}</Select.Option>); 
//  Desserts.push(<Select.Option key={'Zarda '}>{'Zarda '}</Select.Option>);
//  Desserts.push(<Select.Option key={'Motanjan'}>{'Motanjan'}</Select.Option>);
//  Desserts.push(<Select.Option key={'Khubani ka Metha'}>{'Khubani ka Metha'}</Select.Option>);
//  Desserts.push(<Select.Option key={'Swiss Rolls'}>{'Swiss Rolls'}</Select.Option>);
//  Desserts.push(<Select.Option key={'Lab-e-Sherin'}>{'Lab-e-Sherin'}</Select.Option>);
//  Desserts.push(<Select.Option key={'Bread & Butter Pudding'}>{'Bread & Butter Pudding'}</Select.Option>);
 
 
message.config({
  top: 100,
  duration: 2,
});


class Add extends Component{
	constructor(){
		super();
        this.state = {
            main:[],
            name: '',
            Mobile:'', 
            address:'',
            price:'',
            date:'',
            image:'',
            Desserts:'',
            dishes:'',
            capacity:'',
            menu:'',
          
           
        }
        this.Image = this.Image.bind(this);
         this.menu = this.menu.bind(this);
	}
	  componentWillMount()
    {	 
	}
    componentDidMount(){
       
    }
    // SelectOption(value) {
	//   this.setState({dishes: value});
    //   console.log(value);
    // }
    //  Desserts(value) {
	//   this.setState({Desserts: value});
    //   console.log(value);
    // } 
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
		else if(this.state.date === "") {
			message.error('Enter date');
		}
		else if(this.state.price === "") {
			message.error('Enter price');
		}
		
		
		else if(this.state.capacity === "") {
			message.error('Enter Capacity');
		}
		else if(this.state.image === "") {
			message.error('Select image');
		}
		// else if(this.state.Desserts === "") {
		// 	message.error('Enter Desserts');
		// }
		// else if(this.state.dishes === "") {
		// 	message.error('Enter Dishes');
        // }
        else {
         this.setState({ loading: true });
			 this.setState({ iconLoading: true });
           var post = new URLSearchParams();
        post.append('name',this.state.name);
        post.append('mobileno',this.state.Mobile);
        post.append('address',this.state.address);
		post.append('date',this.state.date);
		post.append('price',this.state.price); 
        post.append('shop_image',this.state.image);
         post.append('desserts',this.state.menu);
        // post.append('dishes',this.state.dishes);
        post.append('capacity',this.state.capacity);
        axios.post('/Cattering/Add',post).then(res => {
			 message.success('Cattering Details Added');
       	 setTimeout(function(){
           window.location.reload(1);
                  },1000);
         });
        }
    }
        Image(evt) {
    
    var self = this;
    var reader = new FileReader();
    var file = evt.target.files[0];

    reader.onload = function(upload) {
        self.setState({
			image: upload.target.result,
			

        });
        console.log(upload.target.result);
    };
    reader.readAsDataURL(file);
    console.log(this.state.image);
        
    
}
menu(evt) {
    
    var self = this;
    var reader = new FileReader();
    var file = evt.target.files[0];

    reader.onload = function(upload) {
        self.setState({
			menu: upload.target.result,
			

        });
        console.log(upload.target.result);
    };
    reader.readAsDataURL(file);
    console.log(this.state.menu);
        
    
}
    render(){
	return(	          
		     <div>          
              <div className="panel-editbox" data-widget-controls=""></div>
                                  <div className="panel-body">
                                       <div className="form-horizontal row-border">
                                            <div className="form-group">
                                               <label className="col-sm-1 control-label">Name</label>
                                                  <div className="col-sm-4">
                                                      <input type="text"  onChange={(e)=> this.setState({name: e.target.value})}  className="form-control"/>
                                                      </div>
                                                     <label className="col-sm-1 control-label">Mobile Number</label>
                                                 <div className="col-sm-4">
                                             <input type="number"  onChange={(e)=> this.setState({Mobile: e.target.value})} min="0"  className="form-control"/>
                                         </div>
                                     </div>
                                      <div className="form-group">
                                               <label className="col-sm-1 control-label">Address</label>
                                                  <div className="col-sm-4">
                                                      <input type="text" onChange={(e)=> this.setState({address: e.target.value})}  className="form-control"/>
                                                      </div>
                                                     <label className="col-sm-1 control-label">Price</label>
                                                 <div className="col-sm-4">
                                             <input type="number" onChange={(e)=> this.setState({price: e.target.value})} min="0" className="form-control"/>
                                         </div>
                                     </div>
                                     	 <div className="form-group">
						<label className="col-sm-2 control-label"> Available Date </label>
						<div className="col-sm-2">
							<div className="input-group">
								  <span name="daterangepicker" className="input-group-addon"><i className="fa fa-calendar"></i></span>  
								  <input onChange={(e)=> this.setState({date: e.target.value})}  type="date" className="form-control" id="daterangepicker"/>  
							</div>
						</div>
						<label className="col-sm-2 control-label">Capacity</label>
						<div className="col-sm-2">
						<input type="number" onChange={(e)=> this.setState({capacity: e.target.value})} min="0" className="form-control"/>
					</div>
					</div>

                     	{/* <div className="form-group">
					<label className="col-sm-2 control-label">Enter Dishes</label>
					<div className="col-sm-8">
						 
                          <Select class="ui dropdown"
                           style={{ width: '100%' }}
                            placeholder="Please select"
                            onChange={(e) => this.SelectOption(e)}>
                             {dishes}
                        </Select>
					</div>
					</div> */}
                    {/* <div className="form-group">
					<label className="col-sm-2 control-label">Enter Desserts</label>
					<div className="col-sm-8">
						 <Select
    					  mode="multiple"
   						  style={{ width: '100%' }}
  						  placeholder="Please select"
   						  onChange={(e) => this.Desserts(e)}>
    					  {Desserts}
 						 </Select>
					</div>
					</div> */}
                    <div className="form-group">
                        <label className="col-sm-2 control-label">Upload Menu</label>
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
                              onChange={this.menu}
                              required/>
								 </span> 
								
							</div>
						</div>
					</div>

                    </div>
                                     <div className="form-group">
				        	<label className="col-sm-2 control-label">Shop Image</label>
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
                              onChange={this.Image}
                              required/>
								 </span> 
								
							</div>
						</div>
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
)
    }
}
export default Add;