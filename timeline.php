<div id="twitter-feed">
                 <span id="letras"></span>
                <form name="tweet_post" method="post" style="width: 400px; margin: 0pt auto;clear:right;">
                  <textarea rows="4" cols="49" name="tweet_txt" id="tweet_txt" onKeyUp="contar(this);"></textarea>
						<input type="hidden" name="reply_id" id="t_reply"/>
                	<button id="tweet_submit" class="tweet_button">Submit</button>
                </form>
 
               <ul class="t_tab">
			<li class="t_selected" id="#t_timeline">Timeline</li>
			<li id="#t_mentions">@Mentions</li>
			<li id="#t_messages">Messages</li>
		</ul>
 
               <div id="t_timeline" class="tab_content">
               <ul>
                   <li>
			<div class="foto">
				<img src="" alt="" width="" /> 
			</div>
			<a href="" title="">Nombre de usuario Twitter</a>
			<br/>Texto del tweet<br/>
                        <div style="text-align:right">
				 <a href="#" onClick="javascript:">Reply</a>
			</div>
		 </li>
           </ul>
          </div>
 
<div style="clear: both;"></div>
</div>
