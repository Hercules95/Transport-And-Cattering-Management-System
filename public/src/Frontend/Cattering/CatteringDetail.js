import React,{Component} from 'react';
import axios from 'axios';
import ReactDOM from 'react-dom';
class CatteringDetail extends Component{
	constructor(){
		super();
        this.state = {
            main:[],
            name:'',
            status:'',
            pre:'',
            next:'',
         
           
		}
	}
        componentWillMount()
        {
            axios.get('/Cattering/get').then(response => { 
               this.setState({main:response.data.data,
                next:response.data.next_page_url,
                prev:response.data.prev_page_url});    
      });
        }
    componentDidMount(){
       
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
     showDetails(id)
    {
        window.location.href="/Catering/Service/Detail/"+id;
    }
    render(){
	return(	  
        <div>         
             {this.state.main.map((v,i) => {  
              return(           
       <div key={i} className="venues-slide first">
                                	<div className="img">
                                        <img style={{height: 277,width: 260}} src={'/CatteringShopImages/'+v.shop_image}/></div>
                                    <div className="text">
                                    	<h3>{v.cname}</h3>
                                        <div className="address">{v.address}</div>
                                        <div className="reviews">3.5 <div className="star"><div className="fill" style={{width:70}}></div></div>reviews</div>
                                        <div className="outher-info">
                                        	<div className="info-slide first">
                                            	<label>Seating Capacity</label>
                                                <span>{v.capacity}</span>
                                            </div>
                                            <div className="info-slide">
                                            	<label>Price Range</label>
                                                <span>PKR {v.price}</span>
                                            </div>
                                            <div className="info-slide">
                                                
                                            	<label>Check Availibility</label>
                                                {v.availability == 1 ?
                                                <span>Availibile</span>:
                                                 <span>Booked</span>}
                                                
                                                
                                            </div>
                                        </div>
                                        <div className="outher-link">
                                        	
                                        </div>
                                        <div className="button">
                                        	<a href="#" className="btn">Book Now</a>
                                            <a onClick={this.showDetails.bind(this,v.id)} className="btn gray">View Details <span className="icon icon-arrow-down"></span></a>
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
export default CatteringDetail;