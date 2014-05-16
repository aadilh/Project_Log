  <div class="custom-topbar">
                
                            <br>
                      <div class="ui vertically divided grid">
                      
                      <div class="three column row">
                        <div class="one wide column">
                            <div class="ui red icon button close">
                              <i class="remove icon"></i>
                            </div>
                        </div>
                        <div class="ten wide column">
                            
                            <div class="ui blue inverted center custom-width aligned segment">
                               <i class="add sign icon"></i>  ADD TO LOG
                            </div>
                        
                     </div>
                        <div class="one wide column">
                      </div>
                      </div>
                      <div class="three column row">
                        <div class="one wide column">
                      </div>
                        <div class="ten wide column">
                        
                        
                        <form action="<?php echo base_url();?>index.php/site/addtolog" method="post" >
                        
                            <div class="custom-width">
                            <div class="ui small form segment">
                                  <div class="inline field">
                                    <label>
                                    <i class="user icon"></i>
                                    User </label> 
                                      <br>
                                      <select name="user" id="user" class="custom-medium"  >
                                        <option value="1" >Aadil Hayat</option>
                                        <option value="2">Kriti Joshi</option>
                                        <option value="3">Siddharth Gupta</option>
                                        <option value="4">Vandana Gautam</option>
                                    </select>
                                      
                                      
                                      
                                    
                                  </div>
                                    
                                  <div class=" inline field">
                                    <label><i class="lock icon"></i> Password</label>
                                    <br>
                                    <div class="ui custom-medium input">
                                      <input type="password" name="password" id="password">
                                       
                                      
                                    </div>
                                  </div>
                                  <div class = "field">
                                  <label><i class="calendar icon"></i> Date </label>
                                  <select name="date" id="date">
                                  <?php
                                    $i = 1;
                                    
                                    while ($i<=31)
                                    {
                                        echo '<option value="'.$i.'" >'.$i.'</option>' ;
                                        $i++;
                                    }
                                  
                                  ?>
                                  </select>
                                  <select name="month" id="month">
                                      <option value="1" >May</option>
                                      <option value="2" >June</option>
                                  </select>
                                  </div>

                                  <div class="field">
                                    <label> <i class="edit icon"></i> Log</label>
                                    <textarea name="log"></textarea>
                                  </div>

                                    
                                  <div class="ui left blue animated button custom-submit">
                                  <div class="visible content">Submit</div>
                                  <div class="hidden content">
                                    <i class="checkmark icon"></i>
                                  </div>
                                  </div>
                                   
                                </div>
                                
                                </div>
                                
                                
                            </form >
                         </div>
                        <div class="one wide column">

                    </div>
                      </div>
                    </div>
                                              
                
                
                
                    
                    
                    
                   
                
            </div>
          


        </div>
        
        <div class=" one wide column">
        </div>
    
    
  </div>
</div>
    
    
    
</body>

</html>