import React,{Component} from 'react';
import axios from 'axios';
import ReactDOM from 'react-dom';
import { message,Button,Select  } from 'antd';
import { Label} from 'semantic-ui-react';


 
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
            Passenger:'',
            vehicleno:'',
            chasisno:'',
            vantype:'',
            Ac:'',
            luxury:'',
            Sound:'',
          
            files:[],
          
           
        }
        // this.Image = this.Image.bind(this);
        //  this.Second = this.Second.bind(this);
          this.fileUploads = this.fileUploads.bind(this);
	}
	  componentWillMount()
    {	 
	}
    componentDidMount(){
        // $(ReactDOM.findDOMNode(this.refs.datepicker2)).datepicker();
       
    }
    
    saveData(){
         this.setState({ loading: true });
			 this.setState({ iconLoading: true });
           var post = new URLSearchParams();
        post.append('name',this.state.name);
        post.append('image',this.state.image);
        post.append('mobile_no',this.state.Mobile);
		post.append('date',this.state.date);
		post.append('price',this.state.price);
        post.append('vantype',this.state.vantype);
         post.append('passenger',this.state.Passenger);
          post.append('vehicleno',this.state.vehicleno);
        //   post.append('image_second',this.state.Second_image);
          post.append('image_third',JSON.stringify(this.state.files));
      post.append('address',this.state.address);
        post.append('chasisno',this.state.chasisno);
         post.append('ac',this.state.Ac);
           post.append('luxury',this.state.luxury);
           post.append('soundsystem',this.state.Sound);

        axios.post('/Transport/Add',post).then(res => {
			 message.success('Tansport Details Added');
       	 setTimeout(function(){
           window.location.reload(1);
                  },1000);
          });
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
//         Image(evt) {
    
//     var self = this;
//     var reader = new FileReader();
//     var file = evt.target.files[0];

//     reader.onload = function(upload) {
//         self.setState({
// 			image: upload.target.result,
			

//         });
//         console.log(upload.target.result);
//     };
//     reader.readAsDataURL(file);
//     console.log(this.state.image);
    
// }

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
						<div className="col-sm-3">
							<div className="input-group">
								  <span className="input-group-addon"><i className="fa fa-calendar"></i></span>  
								  <input onChange={(e)=> this.setState({date: e.target.value})}  type="date" className="form-control" id="daterangepicker"/> 
                                   {/* <input onChange={(e)=> this.setState({date: e.target.value})}  type="text" placeholder="Select Date" ref={'datepicker2'} id="datepicker2"/>   */}
							</div>
						</div>
						<label className="col-sm-1 control-label">Passenger</label>
						<div className="col-sm-3">
						<input type="number" onChange={(e)=> this.setState({Passenger: e.target.value})} min="0" className="form-control"/>
					</div>
					</div>
                     <div className="form-group">
					
						<label className="col-sm-2 control-label">Chasis Number</label>
						<div className="col-sm-3">
						<input type="number" onChange={(e)=> this.setState({chasisno: e.target.value})} min="0" className="form-control"/>
					</div>
                     <label className="col-sm-1 control-label">Vehicle Number</label>
						<div className="col-sm-3">
						<input type="number" onChange={(e)=> this.setState({vehicleno: e.target.value})} min="0" className="form-control"/>
					</div>
					</div>
                     <div className="form-group">
				        
                    <label className="col-sm-1 control-label">Transport Third Image</label>
					<div className="col-sm-2">
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
                </div>
                 <div className="form-group">
                    <label className="col-sm-2 control-label">Van type</label>
						<div className="col-sm-6">
						<input type="text" onChange={(e)=> this.setState({vantype: e.target.value})} min="0" className="form-control"/>
					</div>
                    </div>
                   
                  
                 <div className="form-group">
                     <label className="col-sm-2 control-label" >Ac Faciilty</label>
                       <div className="col-sm-2">
					   <div class="ui fitted checkbox">
                      <input onChange={(e)=> this.setState({Ac: e.target.checked})} type="checkbox"/>
                    </div>
                    </div> 

				
                    <label className="col-sm-2 control-label" >luxury Faciilty</label>
                       <div className="col-sm-2">
					   <div class="ui fitted checkbox">
                      <input onChange={(e)=> this.setState({luxury: e.target.checked})} type="checkbox"/>
                    </div>
                 </div> 
                  <label className="col-sm-2 control-label" >Sound System Faciilty</label>
                       <div className="col-sm-2">
					   <div class="ui fitted checkbox">
                      <input onChange={(e)=> this.setState({Sound: e.target.checked})} type="checkbox"/>
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