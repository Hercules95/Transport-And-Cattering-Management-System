import React,{Component} from 'react';
import axios from 'axios';
import ReactDOM from 'react-dom';
class ServiceDetail extends Component{
	constructor(){
		super();
        this.state = {
            main:[],
         
           
		}
	}
        componentWillMount()
        {
               
		axios.get('/Update/Farms/'+id).then(response => {
			// message.success('Your Detail Has been Deleted');
           
		});
	
            
     
		 
	}
    componentDidMount(){
       
    }

    render(){
	return(	  
        <div>               
         <div className="search-resultPage">
            	<div className="fiexd-nav">
                	<div className="container">
                    	<div className="back-link"><a href="#">
                            <span className="icon icon-back-filled"></span>Back</a></div>
                        <ul>
                        	<li>
                            	<a href="javascript:;">
                                	<span className="icon icon-info"></span>
                                    <span className="text">Information</span>
                            	</a>
                            </li>
                            <li>
                            	<a href="javascript:;">
                                	<span className="icon icon-hands"></span>
                                    <span className="text">Amenities</span>
                            	</a>
                            </li>
                            <li>
                            	<a href="javascript:;">
                                	<span className="icon icon-thumb-image"></span>
                                    <span className="text">Photo Gallery</span>
                            	</a>
                            </li>
                            <li>
                            	<a href="javascript:;">
                                	<span className="icon icon-term-condition"></span>
                                    <span className="text"> Terms & Conditions</span>
                            	</a>
                            </li>
                            <li>
                            	<a href="javascript:;">
                                	<span className="icon icon-cancellation-policy"></span>
                                    <span className="text">Cancellation Policy</span>
                            	</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div className="container">
                	<div className="alert alert-dismissable alert-success">
                        <button type="button" className="close" data-dismiss="alert" aria-hidden="true">×</button>
                        You have successfully updated the details.
                    </div>

                	<div className="row">
                    	<div className="col-lg-9 col-sm-9 col-md-9">
                        	<div className="hotel-info tab-content">
                            	<h2>About the Hotel</h2>
                                <div className="inner-info">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <div className="address">
                                        <div className="map-view">
                                            <img src="/frontend/images/map-img1.png" alt="" />
                                            <div className="link"><a href="#">See Location</a></div>
                                        </div>
                                        <div className="address-view">
                                            <h3>Address :</h3>
                                            <div className="address-slide full">
                                                <div className="icon icon-location-2"></div>
                                                <label>Leipzig Marriott Hotel </label>
                                                <p>Am Hallischen Tor 1 Saxony Leipzig, 04109 - Germany</p>
                                            </div>
                                            <h3>Near by :</h3>
                                            <div className="address-slide">
                                                <div className="icon icon-plane"></div>
                                                <label>13 km</label>
                                                <p>from Sardar Vallabhbhai Patel Airport....</p>
                                            </div>
                                            <div className="address-slide">
                                                <div className="icon icon-train"></div>
                                                <label>05 km</label>
                                                <p>from Kalupur Railway Station</p>
                                            </div>
                                            <div className="address-slide">
                                                <div className="icon icon-bus"></div>
                                                <label>04 km</label>
                                                <p>from Gita Mandir Bus Stop</p>
                                            </div>
                                            <div className="address-slide">
                                                <div className="icon icon-cart"></div>
                                                <label>02 km</label>
                                                <p>Raipur Shopping Mall</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="amenities-list tab-content">
                            	<h2>Amenities for You and Guests</h2>
                                <div className="amenities-view">
                                    <div className="amenities-box">
                                        <div className="icon icon-tea"></div>
                                        <span>Coffee Shop</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-wifi"></div>
                                        <span>Wifi</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-parking"></div>
                                        <span>Parking</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-airport-shuttle"></div>
                                        <span>Airport Shuttle</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-bar"></div>
                                        <span>Bar</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-road-guide"></div>
                                        <span>Guide Service</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-yoga"></div>
                                        <span>Yoga Centre</span>
                                    </div>
                                    <div className="amenities-box disabled">
                                        <div className="icon icon-ayurved"></div>
                                        <span>Ayurveda Centre</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-payment"></div>
                                        <span>Payment Mode</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-ac"></div>
                                        <span>A/C</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-meeting"></div>
                                        <span>Conference Hall</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-apple"></div>
                                        <span>Health Club</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-gym"></div>
                                        <span>Gym</span>
                                    </div>
                                    <div className="amenities-box disabled">
                                        <div className="icon icon-flower"></div>
                                        <span>Florist on Request</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-swimming"></div>
                                        <span>Swimming Pool</span>
                                    </div>
                                    <div className="amenities-box disabled">
                                        <div className="icon icon-steam-bath"></div>
                                        <span>Steam Sauna</span>
                                    </div>
                                    <div className="amenities-box disabled">
                                        <div className="icon icon-shirt"></div>
                                        <span>Laundry Service</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-spa"></div>
                                        <span>Spa</span>
                                    </div>
                                    <div className="amenities-box disabled">
                                        <div className="icon icon-beauty-saloon"></div>
                                        <span>Beauty Salon</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-sun-bed"></div>
                                        <span>Sun Beds</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-bag"></div>
                                        <span>Business Centre</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-doctor"></div>
                                        <span>Doctor on Call</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-massage-center"></div>
                                        <span>Massage Centre</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-taxi"></div>
                                        <span>Taxi Service</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-currency-xchg"></div>
                                        <span>Currency Exchange</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-handicape"></div>
                                        <span>Handicap Facilities</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-spoon"></div>
                                        <span>Restaurant</span>
                                    </div>
                                    <div className="amenities-box">
                                        <div className="icon icon-room-service"></div>
                                        <span>Room Service</span>
                                    </div>
                                </div>
                            </div>
                            <div className="photo-gallery tab-content">
                            	<h2>Photo Gallery</h2>
                                <div className="gallery-view">
                                	<div className="row">
                                    	<div className="col-sm-4 col-xs-6">
                                        	<div className="img">
                                            	<a href="/frontend/images/gallery-img/gallery1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="/frontend/images/gallery-img/gallery1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div className="name">Lorem Ipsum is simply </div>
                                        </div>
                                        <div className="col-sm-4 col-xs-6">
                                        	<div className="img">
                                            	<a href="/frontend/images/gallery-img/gallery2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="/frontend/images/gallery-img/gallery2.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div className="name">Lorem Ipsum is simply </div>
                                        </div>
                                        <div className="col-sm-4 col-xs-6">
                                        	<div className="img">
                                            	<a href="/frontend/images/gallery-img/gallery3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="/frontend/images/gallery-img/gallery3.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div className="name">Lorem Ipsum is simply </div>
                                        </div>
                                        <div className="col-sm-4 col-xs-6">
                                        	<div className="img">
                                                <a href="/frontend/images/gallery-img/gallery4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                                    <img src="/frontend/images/gallery-img/gallery4.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div className="name">Lorem Ipsum is simply </div>
                                        </div>
                                        <div className="col-sm-4 col-xs-6">
                                        	<div className="img">
                                            	<a href="/frontend/images/gallery-img/gallery5.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="/frontend/images/gallery-img/gallery5.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div className="name">Lorem Ipsum is simply </div>
                                        </div>
                                        <div className="col-sm-4 col-xs-6">
                                        	<div className="img">
                                            	<a href="/frontend/images/gallery-img/gallery6.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="/frontend/images/gallery-img/gallery6.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div className="name">Lorem Ipsum is simply </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                          
                            <div className="terms-conditions tab-content">
                            	<h2>Terms & Conditions</h2>
                                <div className="conditions">
                                    <h3>Lorem Ipsum is simply dummy </h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <h3>Lorem Ipsum is simply dummy </h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <h3>Lorem Ipsum is simply dummy </h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                            <div className="cancellation-policy tab-content">
                                <h2>Cancellation Policy</h2>
                                <div className="policy">
                                    <h3>1 policy</h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <h3>2 policy</h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <h3>3 policy</h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div className="col-log-3 col-sm-3 col-md-3">
                        <div className="booking-formMain">
                        <div className="book-title">Enter Booking Details </div>	
                        <div className="book-form">
                            <div className="row">
                                <div className="col-sm-12">
                                    <div className="input-box has-error">
                                        <input type="text" placeholder="Name"/>
                                        <div className="help-block">Date cannot be blank.</div>
                                    </div>
                                </div>
                                <div className="col-sm-12">
                                    <div className="input-box">
                                        <input type="text" placeholder="Email"/>
                                    </div>
                                </div>
                                <div className="col-sm-12">
                                    <div className="input-box">
                                        <input type="text" placeholder="Mobile"/>
                                    </div>
                                </div>
                                <div className="col-sm-12 col-lg-6">
                                    <div className="input-box">
                                        <input type="text" placeholder="Date"/>
                                    </div>
                                </div>
                                <div className="col-sm-12 col-lg-6">
                                    <div className="input-box">
                                        <input type="text" placeholder="Time"/>
                                    </div>
                                </div>
                                <div className="col-sm-12 col-lg-6">
                                    <div className="input-box">
                                        <input type="text" placeholder="Min Guest"/>
                                    </div>
                                </div>
                                <div className="col-sm-12 col-lg-6">
                                    <div className="input-box">
                                        <input type="text" placeholder="Max Guest"/>
                                    </div>
                                </div>
                                <div className="col-sm-12">
                                    <a  href="javascript:;" data-toggle="modal" data-target="#seatingModal" className="select-seating">
                                        <span className="select-value">Select Seating</span>
                                        <span className="arrow"><img src="/frontend/images/select-arrow.png" alt=""/></span>
                                    </a>
                                </div>
                                <div className="col-sm-12">
                                    <div className="input-box">
                                        <input type="text" placeholder="Meal Type"/>
                                    </div>
                                </div>
                                <div className="col-sm-12">
                                    <div className="input-box">
                                        <input type="text" placeholder="Amount to Pay"/>
                                    </div>
                                </div>
                                <div className="col-sm-12">
                                    <div className="input-box">
                                        <input type="text" placeholder="Special Instruction"/>
                                    </div>
                                </div>
                                <div className="col-sm-12">
                                    <div className="submit-box">
                                        <input type="submit" value="Book Now" className="btn"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                            </div>
                    </div>

                    <div className="modal modal-vcenter fade" id="seatingModal"  role="dialog">
                        <div className="modal-dialog seating-popup" role="document">
                        	<div className="modal-content">
                            	<div className="close-icon" aria-label="Close" data-dismiss="modal" >
                                    <img src="/frontend/images/close-icon.png" alt=""/></div>
                                <h1>Seating Availability</h1>
                                <div className="facility-view">
                                    <div className="facility-box">
                                    	<div className="inner-box">
                                            <div className="radio-icon"></div>
                                            <div className="icon icon-theater"></div>
                                            <div className="name">Theatre</div>
                                            <div className="count">500</div>
                                        </div>
                                    </div>
                                    <div className="facility-box">
                                    	<div className="inner-box">
                                            <div className="radio-icon"></div>
                                            <div className="icon icon-classNameroom"></div>
                                            <div className="name">ClassNameroom</div>
                                            <div className="count">250</div>
                                        </div>
                                    </div>
                                    <div className="facility-box">
                                    	<div className="inner-box">
                                            <div className="radio-icon"></div>
                                            <div className="icon icon-banquet"></div>
                                            <div className="name">Banquet</div>
                                            <div className="count">140</div>
                                        </div>
                                    </div>
                                    <div className="facility-box">
                                    	<div className="inner-box">
                                            <div className="radio-icon"></div>
                                            <div className="icon icon-u-shape"></div>
                                            <div className="name">U-Shape</div>
                                            <div className="count">120</div>
                                        </div>
                                    </div>
                                    <div className="facility-box">
                                    	<div className="inner-box">
                                            <div className="radio-icon"></div>
                                            <div className="icon icon-reception"></div>
                                            <div className="name">Reception</div>
                                            <div className="count">1000</div>
                                        </div>
                                    </div>
                                    <div className="facility-box active">
                                    	<div className="inner-box">
                                            <div className="radio-icon"></div>
                                            <div className="icon icon-boardroom"></div>
                                            <div className="name">Boardroom</div>
                                            <div className="count">10</div>
                                        </div>
                                    </div>
                                </div>
                                <div className="select-btn"><a href="javascript:;" className="btn">select</a></div>
                			</div>    
                        </div>
                    </div>
                </div>
            </div>  
            </div>
	
)
    }
}
export default ServiceDetail;