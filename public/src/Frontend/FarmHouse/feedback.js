import React,{Component} from 'react';
import axios from 'axios';
import ReactDOM from 'react-dom';
import {Comment,Button,Label} from 'semantic-ui-react';
class Feedback extends Component{
	constructor(){
		super();
        this.state = {
            main:[],
         
           
		}
	}
        componentWillMount()
        {	 
	}
    componentDidMount(){
       
    }

    render(){
	return(	  
        <div>               
        
            	<div className="ui threaded comments">
  <h3 className="ui dividing header">Comments</h3>
  <div className="comment">
    <a className="avatar">
      <img src="/images/avatar/small/joe.jpg"/>
    </a>
    <div className="content">
      <a className="author">Joe Henderson</a>
      <div className="metadata">
        <span className="date">5 days ago</span>
      </div>
      <div className="text">
        Dude, this is awesome. Thanks so much
      </div>
      <div className="actions">
        <a className="reply">Reply</a>
      </div>
    </div>
  </div>
  <div className="ui reply form">
    <div className="field">
      <textarea></textarea>
    </div>
    <div className="ui blue labeled submit icon button">
      <i className="icon edit"></i> Add Comment
    </div>
  </div>
</div>
            </div>
	
)
    }
}
export default Feedback;