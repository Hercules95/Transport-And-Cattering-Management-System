import React,{Component} from 'react';
import axios from 'axios';
import ReactDOM from 'react-dom';
class Getlist extends Component{
	constructor(){
		super();
        this.state = {
            main:[],
         next:'',
         prev:'',
           
		}
	}
        componentWillMount()
        {
            axios.get('/Transport/GetFarmData').then(response => { console.log(response);
               this.setState({main:response.data.data,
                next:response.data.next_page_url,
                prev:response.data.prev_page_url});    
      });
		 
	}
    componentDidMount(){
       
    }
    showDetails(id)
    {
         window.location.href="/Transport/Service/Detail/"+id;
    }
    next()
    {
        axios.get(this.state.next).then(response => {
            console.log(response);
               this.setState({main:response.data.data,
                next:response.data.next_page_url,
                prev:response.data.prev_page_url});    
      });
    }
     pre()
    {
        axios.get(this.state.prev).then(response => {
            console.log(response);
               this.setState({main:response.data.data,
                prev:response.data.prev_page_url,
                next:response.data.next_page_url});    
      });
    }
    render(){
	return(	  
        <div>               
         {this.state.main.map((v,i) => {  
              return(         
         <div key={i} className="venues-slide first">
                                	<div className="img">
                                    <img style={{width:'100%',height:287}} src={'/TransportImage/'+v.submitted_by}/>
                                    </div>
                                    <div className="text">
                                    	<h3>{v.name}</h3>
                                        <div className="address">{v.address}</div>
                                        <div className="reviews">3.5 <div className="star">
                                            <div className="fill" style={{width:'70%'}}>
                                                </div>
                                                </div>reviews</div>
                                        <div className="outher-info">
                                        	<div className="info-slide first">
                                            	<label>Van Type</label>
                                                <span>{v.vantype}</span>
                                            </div>
                                            <div className="info-slide">
                                            	<label>Price Range</label>
                                                <span>PKR {v.price}</span>
                                            </div>
                                           
                                             <div className="info-slide">
                                            	<label>Date</label>
                                                <span>{v.date}</span>
                                            </div> 
                                              {/* <div className="info-slide">
                                                
                                            	<label>Check Availibility</label>
                                                 {v.availability == 0 ?
                                                <span>Availibile</span>:
                                                 <span>Booked</span>}
                                                
                                                
                                            </div>
                                            */}
                                        </div>
                                         <div className="outher-link">
                                        	
                                        </div>
                                        <div className="button">
                                        	 
                                             <a onClick={this.showDetails.bind(this,v.tid)} className="btn">View Details</a> 
                                        </div>
                                    </div>
                                </div>
                                   )
                       })}    
                        <div className="pagination">
                                	<ul>
                                    {this.state.prev === null ? <li className="prev disabled"><a onClick={this.pre.bind(this)}>Previous</a></li>
                                    :<li className="prev"><a onClick={this.pre.bind(this)}>Previous</a></li> }
                                    {this.state.next == null ? <li className="next disabled" ><a onClick={this.next.bind(this)} >Next</a></li>
                                    : <li className="next" ><a onClick={this.next.bind(this)} >Next</a></li>}
                                       
                                    </ul>
                        </div>             
            </div>
	
)
    }
}
export default Getlist;