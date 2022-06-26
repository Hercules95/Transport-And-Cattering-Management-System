import React,{Component} from 'react';
import axios from 'axios';
import ReactDOM from 'react-dom';
class Search extends Component{
	constructor(){
		super();
        this.state = {
            main:[],
            name:'',
            date:'',
         
           
		}
	}
        componentWillMount()
        {
           
        }
    componentDidMount(){
       $(ReactDOM.findDOMNode(this.refs.datepicker2)).datepicker("getdata");
      
    }
     saveData()
     {
          var post = new URLSearchParams();
        post.append('name',this.state.name);
          post.append('date',this.state.date);
        // axios.post('/Search',post).then(res => {
		// // 	 message.success('Farm House Details Added');
       	// //  setTimeout(function(){
        // //    window.location.reload(1);
        // //           },1000);
        // });
        window.location.href="/Search/"+this.state.name+'/'+this.state.date;
     }
    render(){
	return(	  
        <div>               
       <div className="banner-text">
                <div className="container">
                    <div className="search-title">
                        <h1> Every Event Should be  <span>Perfect</span></h1>
                    </div>
                    <div className="banner-search">
                        <div className="input-box">
                            <div className="icon icon-grid-view"></div>
                            <input type="text" onChange={(e)=> this.setState({name: e.target.value})}  placeholder="Event Name"/>
                        </div>
                        <div className="input-box location">
                            <div className="icon icon-location-1"></div>
                            <input type="text" placeholder="Event Location"/>
                        </div>
                        <div className="input-box date">
                            <div className="icon icon-calander-month"></div>
                            <input type="text" onClick={(e)=> this.setState({date: e.target.value})} placeholder="Select Date" ref={'datepicker2'} id="datepicker2"/>
                        </div>
                        <div className="submit-slide">
                            <input type="submit" onClick={this.saveData.bind(this)} className="btn"/>
                        </div>
                        <p>Create the Perfect Event</p>	
                    </div>
                </div>
            </div>
            </div>
	
)
    }
}
export default Search;