@extends('admin.sadmin')
@section('content')
<div id="app">
   <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb;">
      <span>
         <div class="Polaris-Page">
            <div class="Polaris-Page__Content">
               <div class="Polaris-Layout">
                  <div class="Polaris-Layout__AnnotatedSection">
                     <div class="Polaris-Layout__AnnotationWrapper">
                        <div class="Polaris-Layout__Annotation">
                           <div class="Polaris-TextContainer">
                              <h2 class="Polaris-Heading">Location details</h2>
                              <div class="Polaris-Layout__AnnotationDescription">
                                 <p>This location’s name and address</p>
                              </div>
                           </div>
                        </div>
                        <div class="Polaris-Layout__AnnotationContent">
                           <div class="Polaris-Card">
                              <div class="Polaris-Card__Header">
                                 <h2 class="Polaris-Heading">Address</h2>
                              </div>
                              <div style="padding: 2rem;">
                                 <div class="Polaris-FormLayout">
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                       <div class="Polaris-FormLayout__Items">
                                          <div class="Polaris-FormLayout__Item">
                                             <div class="">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                   <div class="Polaris-Label">
                                                      <label id="PolarisTextField1Label" for="PolarisTextField1" class="Polaris-Label__Text">Company name</label>
                                                   </div>
                                                </div>
                                                <div class="Polaris-Connected">
                                                   <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                      <div class="Polaris-TextField">
                                                         <input name="company_name" id="PolarisTextField1" placeholder="" value="{{$shopify_location->body->location->name}}" class="Polaris-TextField__Input" type="text" aria-labelledby="PolarisTextField1Label" aria-invalid="false" aria-multiline="false" >
                                                         <div class="Polaris-TextField__Backdrop"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="Polaris-FormLayout__Item">
                                             <div class="">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                   <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Address line 1</label></div>
                                                </div>
                                                <div class="Polaris-Connected">
                                                   <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                      <div class="Polaris-TextField">
                                                         <input name="address_line_1" id="PolarisTextField2" placeholder="" value="{{$shopify_location->body->location->address1}}" class="Polaris-TextField__Input" type="text" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" >
                                                         <div class="Polaris-TextField__Backdrop"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                       <div class="Polaris-FormLayout__Items">
                                          <div class="Polaris-FormLayout__Item">
                                             <div class="">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                   <div class="Polaris-Label"><label id="PolarisTextField3Label" for="PolarisTextField3" class="Polaris-Label__Text">Address line 2</label></div>
                                                </div>
                                                <div class="Polaris-Connected">
                                                   <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                      <div class="Polaris-TextField">
                                                         <input name="address_line_2" id="PolarisTextField3" placeholder="" value="{{$shopify_location->body->location->address2}}" class="Polaris-TextField__Input" type="text" aria-labelledby="PolarisTextField3Label" aria-invalid="false" aria-multiline="false" >
                                                         <div class="Polaris-TextField__Backdrop"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="Polaris-FormLayout__Item">
                                             <div class="">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                   <div class="Polaris-Label"><label id="PolarisTextField4Label" for="PolarisTextField4" class="Polaris-Label__Text">City</label></div>
                                                </div>
                                                <div class="Polaris-Connected">
                                                   <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                      <div class="Polaris-TextField">
                                                         <input name="city" id="PolarisTextField4" placeholder="" value="{{$shopify_location->body->location->city}}" class="Polaris-TextField__Input" type="text" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" >
                                                         <div class="Polaris-TextField__Backdrop"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                       <div class="Polaris-FormLayout__Items">
                                          <div class="Polaris-FormLayout__Item">
                                             <div class="">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                   <div class="Polaris-Label"><label id="PolarisSelect1Label" for="PolarisSelect1" class="Polaris-Label__Text">Country</label></div>
                                                </div>
                                                <div class="Polaris-Connected">
                                                   <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                      <div class="Polaris-TextField">
                                                         <input name="country" id="PolarisTextField4" placeholder="" value="{{$shopify_location->body->location->country}}" class="Polaris-TextField__Input" type="text" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" >
                                                         <div class="Polaris-TextField__Backdrop"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="Polaris-FormLayout__Item">
                                             <div class="">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                   <div class="Polaris-Label"><label id="PolarisSelect2Label" for="PolarisSelect2" class="Polaris-Label__Text">State</label></div>
                                                </div>
                                                <div class="Polaris-Connected">
                                                   <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                      <div class="Polaris-TextField">
                                                         <input name="country" id="PolarisTextField4" placeholder="" value="{{$shopify_location->body->location->province}}" class="Polaris-TextField__Input" type="text" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" >
                                                         <div class="Polaris-TextField__Backdrop"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                       <div class="Polaris-FormLayout__Items">
                                          <div class="Polaris-FormLayout__Item">
                                             <div class="">
                                                <div class="Polaris-Labelled__LabelWrapper">
                                                   <div class="Polaris-Label"><label id="PolarisTextField5Label" for="PolarisTextField5" class="Polaris-Label__Text">Zip code</label></div>
                                                </div>
                                                <div class="Polaris-Connected">
                                                   <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                      <div class="Polaris-TextField">
                                                         <input name="postal_code" id="PolarisTextField5" placeholder="" class="Polaris-TextField__Input" type="text" aria-labelledby="PolarisTextField5Label" aria-invalid="false" aria-multiline="false" value="{{$shopify_location->body->location->zip}}">
                                                         <div class="Polaris-TextField__Backdrop"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-Layout__AnnotatedSection">
                     <div class="Polaris-Layout__AnnotationWrapper">
                        <div class="Polaris-Layout__Annotation">
                           <div class="Polaris-TextContainer">
                              <h2 class="Polaris-Heading">Location User</h2>
                              <div class="Polaris-Layout__AnnotationDescription">
                                 <p>Manage this location’s by users</p>
                              </div>
                           </div>
                        </div>
                        <div class="Polaris-Layout__AnnotationContent">
                           <div class="cards-container" d style="position: relative; z-index: 1;">
                              <div class="Polaris-Card">
                                 <div class="Polaris-Card__Section">
                                    <div class="Polaris-Card__SectionHeader">
                                    </div>
                                    <div class="Polaris-FormLayout">
                                       <div role="group" class="Polaris-FormLayout--grouped">
                                          <div class="Polaris-FormLayout__Items">
                                             <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                   <div class="Polaris-Labelled__LabelWrapper">
                                                      <div class="Polaris-Label"><label id="useremai" for="useremail" class="Polaris-Label__Text">Email</label></div>
                                                   </div>
                                                   <div class="Polaris-Connected">
                                                      <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                         <div class="Polaris-TextField">
                                                            <input name="email" id="useremail" placeholder="" value="" class="Polaris-TextField__Input" type="text" aria-invalid="false" aria-multiline="false" >
                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                   <div class="Polaris-Labelled__LabelWrapper">
                                                      <div class="Polaris-Label"><label id="userpass" for="userpassword" class="Polaris-Label__Text">Password</label></div>
                                                   </div>
                                                   <div class="Polaris-Connected">
                                                      <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                         <div class="Polaris-TextField">
                                                            <input name="password" id="userpassword" placeholder="" value="" class="Polaris-TextField__Input" type="password"  aria-invalid="false" aria-multiline="false" >
                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-Layout__AnnotatedSection">
                     <div class="Polaris-Layout__AnnotationWrapper">
                        <div class="Polaris-Layout__Annotation">
                           <div class="Polaris-TextContainer">
                              <h2 class="Polaris-Heading">Store Hours</h2>
                              <div class="Polaris-Layout__AnnotationDescription">
                                 <p>Manage this location’s open/close hours settings</p>
                              </div>
                           </div>
                        </div>
                        <div class="Polaris-Layout__AnnotationContent">
                           <div class="cards-container" data-polaris-layer="true" style="position: relative; z-index: 1;">
                              <div class="Polaris-Card">
                                 <div class="Polaris-Card__Section">
                                    <div class="Polaris-Card__SectionHeader">
                                       <h3 aria-label="Product availability" class="Polaris-Subheading">Product availability</h3>
                                    </div>
                                    <fieldset class="Polaris-ChoiceList" id="PolarisChoiceList5" aria-invalid="false">
                                       <legend class="Polaris-ChoiceList__Title">Choose products that can be picked up from this location</legend>
                                       <ul class="Polaris-ChoiceList__Choices">
                                          <li>
                                            <label class="Polaris-Choice" for="PolarisRadioButton7">
                                            <span class="Polaris-Choice__Control">
                                              <span class="Polaris-RadioButton">
                                                <input id="PolarisRadioButton7" name="PolarisChoiceList5" type="radio" class="Polaris-RadioButton__Input" value="all_products" checked="">
                                                <span class="Polaris-RadioButton__Backdrop"></span>
                                                <span class="Polaris-RadioButton__Icon"></span>
                                              </span>
                                            </span>
                                            <span class="Polaris-Choice__Label">All products</span>
                                          </label>
                                        </li>
                                        <li>
                                          <label class="Polaris-Choice" for="PolarisRadioButton8">
                                             <span class="Polaris-Choice__Control">
                                             <span class="Polaris-RadioButton">
                                             <input id="PolarisRadioButton8" name="PolarisChoiceList5" type="radio" class="Polaris-RadioButton__Input" value="specific_products">
                                             <span class="Polaris-RadioButton__Backdrop"></span>
                                             <span class="Polaris-RadioButton__Icon"></span>
                                           </span>
                                         </span>
                                         <span class="Polaris-Choice__Label">Specific products</span>
                                       </label>
                                        </li>

                                       </ul>
                                    </fieldset>
                                 </div>
                                 </div>
                              <div class="Polaris-Card">
                                 <div class="Polaris-Card__Section">
                                    <div class="Polaris-Card__SectionHeader">
                                       <h3 aria-label="Pickup availability" class="Polaris-Subheading">Pickup/Delivery availability</h3>
                                    </div>
                                    <div class="Polaris-FormLayout">
                                       <div class="Polaris-FormLayout__Item">
                                          <fieldset class="Polaris-ChoiceList Polaris-ChoiceList--titleHidden" id="PolarisChoiceList7" aria-invalid="false">
                                             <legend class="Polaris-ChoiceList__Title">Which days of the week do you offer pickup/delivery from this outlet?</legend>
                                             <ul class="Polaris-ChoiceList__Choices">
                                                <li><label class="Polaris-Choice" for="PolarisRadioButton9"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="PolarisRadioButton9" name="PolarisChoiceList7" type="radio" class="Polaris-RadioButton__Input" value="all_week" checked=""><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Every day of the week</span></label></li>
                                                <li><label class="Polaris-Choice" for="PolarisRadioButton10"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="PolarisRadioButton10" name="PolarisChoiceList7" type="radio" class="Polaris-RadioButton__Input" value="specific_week"><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Specific days of the week</span></label></li>
                                             </ul>
                                          </fieldset>
                                          </div>
                                       <div class="Polaris-FormLayout__Item">
                                          <fieldset class="Polaris-ChoiceList" id="PolarisChoiceList10[]" aria-invalid="false">
                                             <legend class="Polaris-ChoiceList__Title">Select days:</legend>
                                             <ul class="Polaris-ChoiceList__Choices">
                                                <li>
                                                   <label class="Polaris-Choice" for="PolarisCheckbox_days">
                                                      <span class="Polaris-Choice__Control">
                                                         <span class="Polaris-Checkbox">
                                                            <input id="PolarisCheckbox_days" name="days[]" type="checkbox" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="" >
                                                            <span class="Polaris-Checkbox__Backdrop"></span>
                                                            <span class="Polaris-Checkbox__Icon">
                                                               <span class="Polaris-Icon">
                                                                  <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                     <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                  </svg>
                                                               </span>
                                                            </span>
                                                         </span>
                                                      </span>
                                                      <span class="Polaris-Choice__Label"></span>
                                                   </label>
                                                </li>
                                             </ul>
                                          </fieldset>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="Polaris-Card__Section">
                                    <div class="Polaris-Card__SectionHeader">
                                       <h3 aria-label="Pickup times" class="Polaris-Subheading">Pickup times</h3>
                                    </div>
                                    <div class="Polaris-FormLayout">
                                       <!-- <div class="Polaris-FormLayout__Item">
                                          <fieldset class="Polaris-ChoiceList Polaris-ChoiceList--titleHidden" id="PolarisChoiceList8" aria-invalid="false">
                                             <legend class="Polaris-ChoiceList__Title">Pickup times</legend>
                                             <ul class="Polaris-ChoiceList__Choices">
                                                <li><label class="Polaris-Choice" for="PolarisRadioButton11"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="PolarisRadioButton11" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input" value="true" checked=""><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Same every day of the week</span></label></li>
                                                <li><label class="Polaris-Choice" for="PolarisRadioButton12"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="PolarisRadioButton12" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input" value="false"><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Different each day of the week</span></label></li>
                                             </ul>
                                          </fieldset>
                                          </div> -->
                                       <div class="Polaris-FormLayout__Item">
                                          <div class="pickupTimesContainer">

                                             <div role="group" class="Polaris-FormLayout--grouped" aria-labelledby="PolarisFormLayoutGroupTitleselect">
                                                <div id="PolarisFormLayoutGroupTitleselect" class="Polaris-FormLayout__Title"></div>
                                                <div class="Polaris-FormLayout__Items">
                                                   <div class="Polaris-FormLayout__Item">
                                                      <div class="">
                                                         <div class="Polaris-Select">
                                                            <select id="" class="Polaris-Select__Input" aria-invalid="false">
                                                               <option value="00:00">12:00 am</option>
                                                               <option value="00:15">12:15 am</option>
                                                               <option value="00:30">12:30 am</option>
                                                               <option value="00:45">12:45 am</option>
                                                               <option value="01:00">1:00 am</option>
                                                               <option value="01:15">1:15 am</option>
                                                               <option value="01:30">1:30 am</option>
                                                               <option value="01:45">1:45 am</option>
                                                               <option value="02:00">2:00 am</option>
                                                               <option value="02:15">2:15 am</option>
                                                               <option value="02:30">2:30 am</option>
                                                               <option value="02:45">2:45 am</option>
                                                               <option value="03:00">3:00 am</option>
                                                               <option value="03:15">3:15 am</option>
                                                               <option value="03:30">3:30 am</option>
                                                               <option value="03:45">3:45 am</option>
                                                               <option value="04:00">4:00 am</option>
                                                               <option value="04:15">4:15 am</option>
                                                               <option value="04:30">4:30 am</option>
                                                               <option value="04:45">4:45 am</option>
                                                               <option value="05:00">5:00 am</option>
                                                               <option value="05:15">5:15 am</option>
                                                               <option value="05:30">5:30 am</option>
                                                               <option value="05:45">5:45 am</option>
                                                               <option value="06:00">6:00 am</option>
                                                               <option value="06:15">6:15 am</option>
                                                               <option value="06:30">6:30 am</option>
                                                               <option value="06:45">6:45 am</option>
                                                               <option value="07:00">7:00 am</option>
                                                               <option value="07:15">7:15 am</option>
                                                               <option value="07:30">7:30 am</option>
                                                               <option value="07:45">7:45 am</option>
                                                               <option value="08:00">8:00 am</option>
                                                               <option value="08:15">8:15 am</option>
                                                               <option value="08:30">8:30 am</option>
                                                               <option value="08:45">8:45 am</option>
                                                               <option value="09:00" selected="selected">9:00 am</option>
                                                               <option value="09:15">9:15 am</option>
                                                               <option value="09:30">9:30 am</option>
                                                               <option value="09:45">9:45 am</option>
                                                               <option value="10:00">10:00 am</option>
                                                               <option value="10:15">10:15 am</option>
                                                               <option value="10:30">10:30 am</option>
                                                               <option value="10:45">10:45 am</option>
                                                               <option value="11:00">11:00 am</option>
                                                               <option value="11:15">11:15 am</option>
                                                               <option value="11:30">11:30 am</option>
                                                               <option value="11:45">11:45 am</option>
                                                               <option value="12:00">12:00 pm</option>
                                                               <option value="12:15">12:15 pm</option>
                                                               <option value="12:30">12:30 pm</option>
                                                               <option value="12:45">12:45 pm</option>
                                                               <option value="13:00">1:00 pm</option>
                                                               <option value="13:15">1:15 pm</option>
                                                               <option value="13:30">1:30 pm</option>
                                                               <option value="13:45">1:45 pm</option>
                                                               <option value="14:00">2:00 pm</option>
                                                               <option value="14:15">2:15 pm</option>
                                                               <option value="14:30">2:30 pm</option>
                                                               <option value="14:45">2:45 pm</option>
                                                               <option value="15:00">3:00 pm</option>
                                                               <option value="15:15">3:15 pm</option>
                                                               <option value="15:30">3:30 pm</option>
                                                               <option value="15:45">3:45 pm</option>
                                                               <option value="16:00">4:00 pm</option>
                                                               <option value="16:15">4:15 pm</option>
                                                               <option value="16:30">4:30 pm</option>
                                                               <option value="16:45">4:45 pm</option>
                                                               <option value="17:00">5:00 pm</option>
                                                               <option value="17:15">5:15 pm</option>
                                                               <option value="17:30">5:30 pm</option>
                                                               <option value="17:45">5:45 pm</option>
                                                               <option value="18:00">6:00 pm</option>
                                                               <option value="18:15">6:15 pm</option>
                                                               <option value="18:30">6:30 pm</option>
                                                               <option value="18:45">6:45 pm</option>
                                                               <option value="19:00">7:00 pm</option>
                                                               <option value="19:15">7:15 pm</option>
                                                               <option value="19:30">7:30 pm</option>
                                                               <option value="19:45">7:45 pm</option>
                                                               <option value="20:00">8:00 pm</option>
                                                               <option value="20:15">8:15 pm</option>
                                                               <option value="20:30">8:30 pm</option>
                                                               <option value="20:45">8:45 pm</option>
                                                               <option value="21:00">9:00 pm</option>
                                                               <option value="21:15">9:15 pm</option>
                                                               <option value="21:30">9:30 pm</option>
                                                               <option value="21:45">9:45 pm</option>
                                                               <option value="22:00">10:00 pm</option>
                                                               <option value="22:15">10:15 pm</option>
                                                               <option value="22:30">10:30 pm</option>
                                                               <option value="22:45">10:45 pm</option>
                                                               <option value="23:00">11:00 pm</option>
                                                               <option value="23:15">11:15 pm</option>
                                                               <option value="23:30">11:30 pm</option>
                                                               <option value="23:45">11:45 pm</option>
                                                            </select>
                                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                               <span class="Polaris-Select__SelectedOption">9:00 am</span>
                                                               <span class="Polaris-Select__Icon">
                                                                  <span class="Polaris-Icon">
                                                                     <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path>
                                                                     </svg>
                                                                  </span>
                                                               </span>
                                                            </div>
                                                            <div class="Polaris-Select__Backdrop"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="Polaris-FormLayout__Item">
                                                      <div class="">
                                                         <div class="Polaris-Select">
                                                            <select id="PolarisSelectclose" class="Polaris-Select__Input" aria-invalid="false" name="close_time">
                                                               <option value="" disabled="">Select</option>
                                                               <option value="09:00">9:00 am</option>
                                                               <option value="09:15">9:15 am</option>
                                                               <option value="09:30">9:30 am</option>
                                                               <option value="09:45">9:45 am</option>
                                                               <option value="10:00">10:00 am</option>
                                                               <option value="10:15">10:15 am</option>
                                                               <option value="10:30">10:30 am</option>
                                                               <option value="10:45">10:45 am</option>
                                                               <option value="11:00">11:00 am</option>
                                                               <option value="11:15">11:15 am</option>
                                                               <option value="11:30">11:30 am</option>
                                                               <option value="11:45">11:45 am</option>
                                                               <option value="12:00">12:00 pm</option>
                                                               <option value="12:15">12:15 pm</option>
                                                               <option value="12:30">12:30 pm</option>
                                                               <option value="12:45">12:45 pm</option>
                                                               <option value="13:00">1:00 pm</option>
                                                               <option value="13:15">1:15 pm</option>
                                                               <option value="13:30">1:30 pm</option>
                                                               <option value="13:45">1:45 pm</option>
                                                               <option value="14:00">2:00 pm</option>
                                                               <option value="14:15">2:15 pm</option>
                                                               <option value="14:30">2:30 pm</option>
                                                               <option value="14:45">2:45 pm</option>
                                                               <option value="15:00">3:00 pm</option>
                                                               <option value="15:15">3:15 pm</option>
                                                               <option value="15:30">3:30 pm</option>
                                                               <option value="15:45">3:45 pm</option>
                                                               <option value="16:00">4:00 pm</option>
                                                               <option value="16:15">4:15 pm</option>
                                                               <option value="16:30">4:30 pm</option>
                                                               <option value="16:45">4:45 pm</option>
                                                               <option value="17:00" selected="selected">5:00 pm</option>
                                                               <option value="17:15">5:15 pm</option>
                                                               <option value="17:30">5:30 pm</option>
                                                               <option value="17:45">5:45 pm</option>
                                                               <option value="18:00">6:00 pm</option>
                                                               <option value="18:15">6:15 pm</option>
                                                               <option value="18:30">6:30 pm</option>
                                                               <option value="18:45">6:45 pm</option>
                                                               <option value="19:00">7:00 pm</option>
                                                               <option value="19:15">7:15 pm</option>
                                                               <option value="19:30">7:30 pm</option>
                                                               <option value="19:45">7:45 pm</option>
                                                               <option value="20:00">8:00 pm</option>
                                                               <option value="20:15">8:15 pm</option>
                                                               <option value="20:30">8:30 pm</option>
                                                               <option value="20:45">8:45 pm</option>
                                                               <option value="21:00">9:00 pm</option>
                                                               <option value="21:15">9:15 pm</option>
                                                               <option value="21:30">9:30 pm</option>
                                                               <option value="21:45">9:45 pm</option>
                                                               <option value="22:00">10:00 pm</option>
                                                               <option value="22:15">10:15 pm</option>
                                                               <option value="22:30">10:30 pm</option>
                                                               <option value="22:45">10:45 pm</option>
                                                               <option value="23:00">11:00 pm</option>
                                                               <option value="23:15">11:15 pm</option>
                                                               <option value="23:30">11:30 pm</option>
                                                               <option value="23:45">11:45 pm</option>
                                                            </select>
                                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                               <span class="Polaris-Select__SelectedOption">5:00 pm</span>
                                                               <span class="Polaris-Select__Icon">
                                                                  <span class="Polaris-Icon">
                                                                     <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path>
                                                                     </svg>
                                                                  </span>
                                                               </span>
                                                            </div>
                                                            <div class="Polaris-Select__Backdrop"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-Layout__AnnotatedSection">
                     <div class="Polaris-Layout__AnnotationWrapper">
                        <div class="Polaris-Layout__Annotation">
                           <div class="Polaris-TextContainer">
                              <h2 class="Polaris-Heading">Geolocation</h2>
                              <div class="Polaris-Layout__AnnotationDescription">
                                 <p>Set Geolocation data</p>
                              </div>
                           </div>
                        </div>
                        <div class="Polaris-Layout__AnnotationContent">
                           <div class="Polaris-Card">
                              <div class="Polaris-Card__Section">
                                 <div role="group" class="Polaris-FormLayout--grouped">
                                    <div class="Polaris-FormLayout__Items">
                                       <div class="Polaris-FormLayout__Item">
                                          <div class="">
                                             <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label">
                                                  <label id="geolongitude" for="longitude" class="Polaris-Label__Text">
                                                    Longitude
                                                  </label>
                                                </div>
                                             </div>
                                             <div class="Polaris-Connected">
                                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                   <div class="Polaris-TextField">
                                                      <input name="longitude" id="longitude" placeholder="" value="" class="Polaris-TextField__Input" type="text" aria-invalid="false" aria-multiline="false" >
                                                      <div class="Polaris-TextField__Backdrop"></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="Polaris-FormLayout__Item">
                                          <div class="">
                                             <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label">
                                                  <label id="geolatitude" for="latitude" class="Polaris-Label__Text">
                                                    Latitude
                                                  </label>
                                                </div>
                                             </div>
                                             <div class="Polaris-Connected">
                                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                   <div class="Polaris-TextField">
                                                      <input name="latitude" id="latitude" placeholder="" value="" class="Polaris-TextField__Input" type="text"  aria-invalid="false" aria-multiline="false" >
                                                      <div class="Polaris-TextField__Backdrop"></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="Polaris-Card Polaris-Card--subdued">
                              <div class="Polaris-Card__Section">
                                 <div class="Polaris-Card__SectionHeader">
                                    <h3 aria-label="Custom attributes" class="Polaris-Subheading">Custom attributes</h3>
                                 </div>
                                 <div class="Polaris-FormLayout">
                                    <div class="Polaris-FormLayout__Item">
                                       <div class="">
                                          <div class="Polaris-Labelled__LabelWrapper">
                                             <div class="Polaris-Label">
                                               <label id="PolarisTextField7Label" for="PolarisTextField7" class="Polaris-Label__Text">
                                                 Custom attribute 1
                                               </label>
                                             </div>
                                          </div>
                                          <div class="Polaris-Connected">
                                             <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                <div class="Polaris-TextField Polaris-TextField--multiline">
                                                   <textarea id="PolarisTextField7" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField7Label" aria-invalid="false" style="height: 35px;"></textarea>
                                                   <div class="Polaris-TextField__Backdrop"></div>
                                                   <div aria-hidden="true" class="Polaris-TextField__Resizer">
                                                      <div class="Polaris-TextField__DummyInput"><br></div>
                                                      <div class="Polaris-TextField__DummyInput"><br></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="Polaris-FormLayout__Item">
                                       <div class="">
                                          <div class="Polaris-Labelled__LabelWrapper">
                                             <div class="Polaris-Label">
                                               <label id="PolarisTextField8Label" for="PolarisTextField8" class="Polaris-Label__Text">
                                                 Custom attribute 2
                                               </label>
                                             </div>
                                          </div>
                                          <div class="Polaris-Connected">
                                             <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                <div class="Polaris-TextField Polaris-TextField--multiline">
                                                   <textarea id="PolarisTextField8" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField8Label" aria-invalid="false" style="height: 35px;"></textarea>
                                                   <div class="Polaris-TextField__Backdrop"></div>
                                                   <div aria-hidden="true" class="Polaris-TextField__Resizer">
                                                      <div class="Polaris-TextField__DummyInput"><br></div>
                                                      <div class="Polaris-TextField__DummyInput"><br></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="Polaris-FormLayout__Item">
                                       <div class="">
                                          <div class="Polaris-Labelled__LabelWrapper">
                                             <div class="Polaris-Label">
                                               <label id="PolarisTextField9Label" for="PolarisTextField9" class="Polaris-Label__Text">
                                                 Custom attribute 3
                                               </label>
                                             </div>
                                          </div>
                                          <div class="Polaris-Connected">
                                             <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                <div class="Polaris-TextField Polaris-TextField--multiline">
                                                   <textarea id="PolarisTextField9" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField9Label" aria-invalid="false" style="height: 35px;"></textarea>
                                                   <div class="Polaris-TextField__Backdrop"></div>
                                                   <div aria-hidden="true" class="Polaris-TextField__Resizer">
                                                      <div class="Polaris-TextField__DummyInput"><br></div>
                                                      <div class="Polaris-TextField__DummyInput"><br></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              </div>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-Layout__Section">
                     <div class="Polaris-PageActions">
                        <div class="Polaris-Stack Polaris-Stack--spacingTight Polaris-Stack--distributionEqualSpacing">
                           <div class="Polaris-Stack__Item">
                              <div class="Polaris-ButtonGroup">
                                 <div class="Polaris-ButtonGroup__Item">
                                    <a class="Polaris-Button" href="/polaris/locations?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjI0OTc1LCJpc3MiOiJodHRwczovL2FwcC5zdG9yZXBpY2t1cC5pby9wb2xhcmlzL2xvY2F0aW9ucy9jcmVhdGUiLCJpYXQiOjE1OTc0ODg2NjIsImV4cCI6MTU5NzQ5MjI2MiwibmJmIjoxNTk3NDg4NjYyLCJqdGkiOiJYaVJNbTZzZXNsNExickxlIn0.eOAIETMsbR2XnYZUWOBZT4yC4F1K7ZIvxZs-EZkwPOU&amp;shop=cakeorgifts.myshopify.com" data-polaris-unstyled="true">
                                       <span class="Polaris-Button__Content">
                                          <span class="Polaris-Button__Icon">
                                             <span class="Polaris-Icon">
                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                   <path d="M12 16a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 0 1 0-1.414l5-5a.999.999 0 1 1 1.414 1.414L8.414 10l4.293 4.293A.999.999 0 0 1 12 16" fill-rule="evenodd"></path>
                                                </svg>
                                             </span>
                                          </span>
                                          <span class="Polaris-Button__Text">Cancel</span>
                                       </span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="Polaris-Stack__Item">
                             <button type="button" class="Polaris-Button Polaris-Button--primary">
                               <span class="Polaris-Button__Content">
                                 <span class="Polaris-Button__Text">Create</span>
                               </span>
                             </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <span></span>
      </span>
   </div>
</div>
@endsection
