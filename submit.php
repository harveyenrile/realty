<?php require_once('header.php'); ?>
<div class="container">
    <div class="row">
        <div class="header">
            <a class="logo" href="index.php"></a></a>
           <div class="top-nav"> Are you an agent? <a href="#" class="btn signup-agent">Signup here</a>
           <a href="#" class="submit-listing"><span>+</span>Submit a listing</a>
           </div>
        </div>
       
        <div class="threecol">
            <div class="sidebar">
                <div class="inner-sidebar">
                    <div class="filter-selector">
                        <fieldset>
                            <label>Property type</label>
                            <select>
                                <option>House and Lot</option>
                                <option>Apartment</option>
                                <option>Town House</option>
                                <option>Condominium</option>
                                <option>Lot</option>
                            </select>
                        </fieldset>
                         <fieldset>
                            <label>Advertised as </label>
                            <select>
                                <option>For sale</option>
                                <option>For rent</option>
                                <option>Rent to own</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <label>Price</label>
                            <input type="text" class="input medium"> Php
                        </fieldset>
                        <fieldset>
                            <label>Location</label>
                            <input type="text" class="input">
                        </fieldset>
                        
                        <fieldset>
                            <h3>Additional information</h3>
                        </fieldset>
                        <fieldset>
                            <label>Lot area</label>
                            <input type="text" class="input short"> sqm
                        </fieldset>
                        <fieldset>
                            <label># of rooms</label>
                            <input type="text" class="input short"> 
                        </fieldset>
                  
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="sixcol last">
            <div class="filter-selector">
                <fieldset class="post-heading">
                   
                    <h1> House and Lot for sale in Cebu <span><a href="#">edit</a></span></h1>
                </fieldset>
                <fieldset>
                    <label>Description</label>
                    <textarea class="description"></textarea>
                </fieldset>
                <fieldset>
                    <div class="submit-actions center">
                        <input type="submit" class="btn submit" value="Publish">
                    </div>
                </fieldset>
                
                
            </div>
        </div>
        <div class="threecol">
          <div class="filter-selector">
            <fieldset>
                    <div class="upload-container">
                        <p class="upload-info">Drag files to upload here</p>
                        <p>or</p>
                        <input type="button" value="Select files" class="btn upload">
                    </div>
            </fieldset>
          </div>
        </div>
        
    </div>
</div>

<?php require_once('footer.php'); ?>