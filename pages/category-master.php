

   
          

          <div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
            <div class="container">
              <!-- az-content-left -->
              <div class="az-content-body pd-lg-l-40 d-flex flex-column">            
                <h2 class="az-content-title">Category Master Page</h2>
      
                <div class="az-content-label mg-b-5">Form Input &amp; Textarea</div>
                <p class="mg-b-20">A basic form control input and textarea with disabled and readonly mode.</p>
      
                <div class="row row-sm">
                  <div class="col-lg">
                    <input class="form-control" placeholder="Input box" type="text">
                  </div><!-- col -->
                  <div class="col-lg mg-t-10 mg-lg-t-0">
                    <input class="form-control" placeholder="Input box (readonly)" readonly="" type="text">
                  </div><!-- col -->
                  <div class="col-lg mg-t-10 mg-lg-t-0">
                    <input class="form-control" placeholder="Input box (disabled)" disabled="" type="text">
                  </div><!-- col -->
                </div><!-- row -->
      
                <div class="row row-sm mg-t-20">
                  <div class="col-lg">
                    <textarea rows="3" class="form-control" placeholder="Textarea"></textarea>
                  </div><!-- col -->
                  <div class="col-lg mg-t-10 mg-lg-t-0">
                    <textarea rows="3" class="form-control" placeholder="Textarea (readonly)" readonly=""></textarea>
                  </div><!-- col -->
                  <div class="col-lg mg-t-10 mg-lg-t-0">
                    <textarea rows="3" class="form-control" placeholder="Texarea (disabled)" disabled=""></textarea>
                  </div><!-- col -->
                </div><!-- row -->
      
                <hr class="mg-y-30">
      
                <div class="az-content-label mg-b-5">Valid State Input</div>
                <p class="mg-b-20">A form control with success, warning and error state.</p>
      
                <form class="needs-validation was-validated">
                  <div class="row row-sm">
                    <div class="col-lg-4">
                      <div class="form-group has-success mg-b-0">
                        <input class="form-control" placeholder="Input box (success state)" value="This is input" required="" type="text">
                        <textarea rows="3" class="form-control mg-t-20" placeholder="Textarea (success state)" required="">This is textarea</textarea>
                      </div><!-- form-group -->
                    </div><!-- col -->
                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                      <div class="form-group has-danger mg-b-0">
                        <input class="form-control" placeholder="Input box (invalid state)" type="text" required="">
                        <textarea rows="3" class="form-control mg-t-20" placeholder="Textarea (invalid state)" required=""></textarea>
                      </div><!-- form-group -->
                    </div><!-- col -->
                  </div><!-- row -->
                </form>
      
                <hr class="mg-y-30">
      
                <div class="az-content-label mg-b-5">Custom Checkboxes &amp; Radios</div>
                <p class="mg-b-20">A custom styled checkboxes and radios.</p>
      
                <div class="row">
                  <div class="col-lg-3">
                    <label class="ckbox">
                      <input type="checkbox"><span>Checkbox Unchecked</span>
                    </label>
                  </div><!-- col-3 -->
                  <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                    <label class="ckbox">
                      <input type="checkbox" checked=""><span>Checkbox Checked</span>
                    </label>
                  </div><!-- col-3 -->
                  <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                    <label class="ckbox">
                      <input type="checkbox" disabled=""><span>Checkbox Disabled</span>
                    </label>
                  </div><!-- col-3 -->
                </div><!-- row -->
      
                <div class="row mg-t-10">
                  <div class="col-lg-3">
                    <label class="rdiobox">
                      <input name="rdio" type="radio">
                      <span>Radio Unchecked</span>
                    </label>
                  </div><!-- col-3 -->
                  <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                    <label class="rdiobox">
                      <input name="rdio" type="radio" checked="">
                      <span>Radio Checked</span>
                    </label>
                  </div><!-- col-3 -->
                  <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                    <label class="rdiobox">
                      <input name="rdio" type="radio" disabled="">
                      <span>Radio Disabled</span>
                    </label>
                  </div><!-- col-3 -->
                </div><!-- row -->
      
                <hr class="mg-y-30">
      
                <div class="az-content-label mg-b-5">File Browser</div>
                <p class="mg-b-20">A custom styled file browser.</p>
      
                <div class="row row-sm">
                  <div class="col-sm-7 col-md-6 col-lg-4">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div><!-- col -->
                </div><!-- row -->
      
                <hr class="mg-y-30">
      
                <div class="az-content-label mg-b-5">Toggle Switches</div>
                <p class="mg-b-20">A custom made toggles with jquery support.</p>
      
                <div class="az-toggle-group-demo">
                  <div class="az-toggle"><span></span></div>
                  <div class="az-toggle az-toggle-secondary"><span></span></div>
                  <div class="az-toggle az-toggle-success"><span></span></div>
                  <div class="az-toggle az-toggle-dark"><span></span></div>
                </div>
      
                <div class="az-toggle-group-demo mg-t-10">
                  <div class="az-toggle on"><span></span></div>
                  <div class="az-toggle az-toggle-secondary on"><span></span></div>
                  <div class="az-toggle az-toggle-success on"><span></span></div>
                  <div class="az-toggle az-toggle-dark on"><span></span></div>
                </div>
      
                <table class="table az-table-reference">
                  <thead>
                    <tr>
                      <th class="wd-40p">Class Reference</th>
                      <th class="wd-60p">Values</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><code class="pd-0 bg-transparent">class="az-toggle az-toggle-[value]"</code></td>
                      <td>secondary | success | dark</td>
                    </tr>
                  </tbody>
                </table>
      
                <hr class="mg-y-30">
      
                <div class="az-content-label mg-b-5">Input Groups</div>
                <p class="mg-b-20">Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs.</p>
      
                <div class="row row-sm">
                  <div class="col-lg-4">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                      </div>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div><!-- input-group -->
                  </div><!-- col -->
                  <div class="col-lg-4">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                      </div>
                    </div>
                  </div><!-- col -->
                  <div class="col-lg-4">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div><!-- input-group -->
                  </div><!-- col -->
                </div><!-- row -->
      
                <div class="row row-sm">
                  <div class="col-lg-4">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <label class="ckbox wd-16 mg-b-0">
                            <input type="checkbox" class="mg-0"><span></span>
                          </label>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Text input with checkbox">
                    </div><!-- input-group -->
                  </div><!-- col-4 -->
                  <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <label class="rdiobox wd-16 mg-b-0">
                            <input type="radio"><span></span>
                          </label>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Text input with radiobox">
                    </div><!-- input-group -->
                  </div><!-- col-4 -->
                  <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                      </span>
                    </div><!-- input-group -->
                  </div><!-- col-4 -->
                </div><!-- row -->
      
                <hr class="mg-y-30">
      
                <div class="az-content-label mg-b-5">Input Mask</div>
                <p class="mg-b-20">Input masks allows a user to more easily enter fixed width input where you would like them to enter the data in a certain format (dates,phones, etc).</p>
      
                <div class="row row-sm">
                  <div class="col-lg-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          Date:
                        </div>
                      </div>
                      <input id="dateMask" type="text" class="form-control" placeholder="MM/DD/YYYY">
                    </div><!-- input-group -->
                  </div><!-- col-4 -->
                  <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          Phone:
                        </div>
                      </div><!-- input-group-prepend -->
                      <input id="phoneMask" type="text" class="form-control" placeholder="(000) 000-0000">
                    </div><!-- input-group -->
                  </div>
                  <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          Phone + Ext.:
                        </div>
                      </div><!-- input-group-prepend -->
                      <input id="phoneExtMask" type="text" class="form-control" placeholder="(000) 000-0000 ext 0000">
                    </div><!-- input-group -->
                  </div>
                  <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          SSN:
                        </div><!-- input-group-text -->
                      </div><!-- input-group-prepend -->
                      <input id="ssnMask" type="text" class="form-control" placeholder="000-00-0000">
                    </div>
                  </div>
                </div><!-- row -->
      
                <hr class="mg-y-30">
      
                <div class="az-content-label mg-b-5">Color Picker</div>
                <p class="mg-b-20">A simple component to select color in the same way you select color in Adobe Photoshop.</p>
      
                <div><input type="text" id="colorpicker" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(23, 162, 184);"></div></div><div class="sp-dd">▼</div></div></div>
      
                <p class="mg-t-40 mg-b-10">You can allow alpha transparency selection. Check out these example.</p>
                <div><input type="text" id="showAlpha" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgba(23, 162, 184, 0.5);"></div></div><div class="sp-dd">▼</div></div></div>
      
                <p class="mg-t-40 mg-b-10">Show pallete only. If you'd like, spectrum can show the palettes you specify, and nothing else.</p>
                <div><input type="text" id="showPaletteOnly" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(220, 53, 69);"></div></div><div class="sp-dd">▼</div></div></div>
      
                <hr class="mg-y-30">
      
                <div class="az-content-label mg-b-5">jQuery UI Date Picker</div>
                <p class="mg-b-20">The datepicker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.</p>
      
                <div class="wd-200 mg-b-20">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control fc-datepicker hasDatepicker" placeholder="MM/DD/YYYY" id="dp1621791230182">
                  </div>
                </div><!-- wd-200 -->
      
                <p>Set the numberOfMonths option to an integer of 2 or more to show multiple months in a single datepicker.</p>
      
                <div class="wd-200 mg-b-20">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                      </div>
                    </div>
                    <input id="datepickerNoOfMonths" type="text" class="form-control hasDatepicker" placeholder="MM/DD/YYYY">
                  </div>
                </div><!-- wd-200 -->
      
                <p>Display the datepicker embedded in the page instead of in an overlay.</p>
      
                <div class="fc-datepicker hasDatepicker" id="dp1621791230183"><div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">May</span>&nbsp;<span class="ui-datepicker-year">2021</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="3" data-year="2021"><a class="ui-state-default ui-priority-secondary" href="#">25</a></td><td class=" ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="3" data-year="2021"><a class="ui-state-default ui-priority-secondary" href="#">26</a></td><td class=" ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="3" data-year="2021"><a class="ui-state-default ui-priority-secondary" href="#">27</a></td><td class=" ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="3" data-year="2021"><a class="ui-state-default ui-priority-secondary" href="#">28</a></td><td class=" ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="3" data-year="2021"><a class="ui-state-default ui-priority-secondary" href="#">29</a></td><td class=" ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="3" data-year="2021"><a class="ui-state-default ui-priority-secondary" href="#">30</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">1</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">7</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">8</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">14</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">15</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">21</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">22</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default ui-state-highlight ui-state-active" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">29</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">30</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="5" data-year="2021"><a class="ui-state-default ui-priority-secondary" href="#">1</a></td><td class=" ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="5" data-year="2021"><a class="ui-state-default ui-priority-secondary" href="#">2</a></td><td class=" ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="5" data-year="2021"><a class="ui-state-default ui-priority-secondary" href="#">3</a></td><td class=" ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="5" data-year="2021"><a class="ui-state-default ui-priority-secondary" href="#">4</a></td><td class=" ui-datepicker-week-end ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="5" data-year="2021"><a class="ui-state-default ui-priority-secondary" href="#">5</a></td></tr></tbody></table></div></div>
      
                <hr class="mg-y-30">
      
                <div class="az-content-label mg-b-5">Datetimepicker</div>
                <p class="mg-b-20">Datetimepicker style variant on top of AmazeUI Datetimepicker.</p>
      
                <div class="wd-250 mg-b-20">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                      </div>
                    </div>
                    <input type="text" value="2018-12-20 21:05" id="datetimepicker" class="form-control">
                  </div>
                </div>
      
                <hr class="mg-y-30">
      
                <div class="az-content-label mg-b-5">Datetimepicker Style 2</div>
                <p class="mg-b-20">Datetimepicker style variant 2 by jquery-simple-datetimepicker</p>
      
                <div class="wd-250 mg-b-20">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                      </div>
                    </div>
                    <input type="text" value="2018-12-20 21:05" id="datetimepicker2" class="form-control">
                  </div>
                </div>
      
                <hr class="mg-y-30">
      
                <div class="az-content-label mg-b-5">Datetimepicker Style 3</div>
                <p class="mg-b-20">Datetimepicker style variant 3 by picker.js</p>
      
                <div class="wd-250 mg-b-20">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                      </div>
                    </div>
                    <input type="text" value="January 20, 2019 09:00" id="datetimepicker3" class="form-control">
                  </div>
                </div>
      
                <hr class="mg-y-30">
      
                <div class="az-content-label mg-b-5">Select<span class="tx-sserif">2</span> Box</div>
                <p class="mg-b-20">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</p>
      
                <div class="row row-sm mg-b-20">
                  <div class="col-lg-4">
                    <p class="mg-b-10">Single Select</p>
                    <select class="form-control select2-no-search select2-hidden-accessible" data-select2-id="13" tabindex="-1" aria-hidden="true">
                      <option label="Choose one" data-select2-id="15"></option>
                      <option value="Firefox">Firefox</option>
                      <option value="Chrome">Chrome</option>
                      <option value="Safari">Safari</option>
                      <option value="Opera">Opera</option>
                      <option value="Internet Explorer">Internet Explorer</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="14" style="width: 286.656px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ab5d-container"><span class="select2-selection__rendered" id="select2-ab5d-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose one</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  </div><!-- col-4 -->
                  <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <p class="mg-b-10">Single Select with Search</p>
                    <select class="form-control select2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option label="Choose one" data-select2-id="3"></option>
                      <option value="Firefox">Firefox</option>
                      <option value="Chrome">Chrome</option>
                      <option value="Safari">Safari</option>
                      <option value="Opera">Opera</option>
                      <option value="Internet Explorer">Internet Explorer</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 286.656px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-zx0n-container"><span class="select2-selection__rendered" id="select2-zx0n-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose one</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  </div><!-- col-4 -->
                  <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <p class="mg-b-10">Single Select (Disabled)</p>
                    <select class="form-control select2 select2-hidden-accessible" disabled="" data-select2-id="4" tabindex="-1" aria-hidden="true">
                      <option label="Choose one" data-select2-id="6"></option>
                      <option value="Firefox">Firefox</option>
                      <option value="Chrome">Chrome</option>
                      <option value="Safari">Safari</option>
                      <option value="Opera">Opera</option>
                      <option value="Internet Explorer">Internet Explorer</option>
                    </select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" data-select2-id="5" style="width: 286.656px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-5cb7-container"><span class="select2-selection__rendered" id="select2-5cb7-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose one</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  </div><!-- col-4 -->
                </div><!-- row -->
      
                <div class="row row-sm mg-b-20">
                  <div class="col-lg-4">
                    <p class="mg-b-10">Multiple Select</p>
                    <select class="form-control select2 select2-hidden-accessible" multiple="" data-select2-id="7" tabindex="-1" aria-hidden="true">
                      <option value="Firefox">Firefox</option>
                      <option value="Chrome">Chrome</option>
                      <option value="Safari">Safari</option>
                      <option value="Opera">Opera</option>
                      <option value="Internet Explorer">Internet Explorer</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 286.656px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Choose one" style="width: 284.646px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  </div><!-- col -->
                  <div class="col-lg-4">
                    <p class="mg-b-10">Multiple Select with Pre-Filled Input</p>
                    <select class="form-control select2 select2-hidden-accessible" multiple="" data-select2-id="9" tabindex="-1" aria-hidden="true">
                      <option value="Firefox" selected="" data-select2-id="11">Firefox</option>
                      <option value="Chrome">Chrome</option>
                      <option value="Safari">Safari</option>
                      <option value="Opera">Opera</option>
                      <option value="Internet Explorer">Internet Explorer</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="10" style="width: 286.656px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Firefox" data-select2-id="12"><span class="select2-selection__choice__remove" role="presentation">×</span>Firefox</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  </div><!-- col -->
                  <div class="col-lg-4">
                    <p class="mg-b-10">Multiple Select (Disabled)</p>
                    <select class="form-control select2-no-search select2-hidden-accessible" multiple="" disabled="" data-select2-id="16" tabindex="-1" aria-hidden="true">
                      <option value="Firefox" selected="" data-select2-id="18">Firefox</option>
                      <option value="Chrome">Chrome</option>
                      <option value="Safari">Safari</option>
                      <option value="Opera">Opera</option>
                      <option value="Internet Explorer">Internet Explorer</option>
                    </select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" data-select2-id="17" style="width: 286.656px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Firefox" data-select2-id="19"><span class="select2-selection__choice__remove" role="presentation">×</span>Firefox</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" disabled="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  </div><!-- col -->
                </div><!-- row -->
      
                <hr class="mg-y-30">
      
                <div class="az-content-label mg-b-5">Range Slider</div>
                <p class="mg-b-20">Easy, flexible and responsive range slider with skin support.</p>
      
                <div class="row row-sm">
                  <div class="col-lg-6">
                    <span class="irs js-irs-0"><span class="irs"><span class="irs-line" tabindex="0"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: hidden;">10</span><span class="irs-max" style="visibility: visible;">100</span><span class="irs-from" style="visibility: hidden;">0</span><span class="irs-to" style="visibility: hidden;">0</span><span class="irs-single" style="left: -0.485148%;">10</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 1.48148%; width: 0%;"></span><span class="irs-bar-edge"></span><span class="irs-shadow shadow-single" style="display: none;"></span><span class="irs-slider single" style="left: 0%;"></span></span><input type="text" class="rangeslider1 irs-hidden-input" name="example_name" value="" tabindex="-1" readonly="">
                  </div><!-- col-6 -->
                  <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                    <span class="irs js-irs-3"><span class="irs"><span class="irs-line" tabindex="0"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: visible;">100</span><span class="irs-max" style="visibility: visible;">1 000</span><span class="irs-from" style="visibility: hidden;">0</span><span class="irs-to" style="visibility: hidden;">0</span><span class="irs-single" style="left: 47.5135%;">550</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 1.48148%; width: 48.5185%;"></span><span class="irs-bar-edge"></span><span class="irs-shadow shadow-single" style="display: none;"></span><span class="irs-slider single" style="left: 48.5185%;"></span></span><input type="text" class="rangeslider2 irs-hidden-input" name="example_name" value="" tabindex="-1" readonly="">
                  </div><!-- col-6 -->
                </div><!-- row -->
                <div class="row row-sm mg-t-40">
                  <div class="col-lg-6">
                    <span class="irs js-irs-6 irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: visible;">$0</span><span class="irs-max" style="visibility: visible;">$1 000</span><span class="irs-from" style="visibility: visible; left: 17.8825%;">$200</span><span class="irs-to" style="visibility: visible; left: 76.1047%;">$800</span><span class="irs-single" style="visibility: hidden; left: 43.7326%;">$200 — $800</span></span><span class="irs-grid" style="width: 97.037%; left: 1.38148%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -1.02431%;">0</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -1.95988%;">250</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -1.95988%;">500</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -1.95988%;">750</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -2.63406%;">1 000</span></span><span class="irs-bar" style="left: 20.8889%; width: 58.2222%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-slider from" style="left: 19.4074%;"></span><span class="irs-slider to type_last" style="left: 77.6296%;"></span></span><input type="text" class="rangeslider3 irs-hidden-input" name="example_name" value="" tabindex="-1" readonly="">
                  </div><!-- col-6 -->
                  <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                    <span class="irs js-irs-9 irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: visible;">-1 000</span><span class="irs-max" style="visibility: visible;">1 000</span><span class="irs-from" style="visibility: visible; left: 22.9986%;">-500</span><span class="irs-to" style="visibility: visible; left: 71.7728%;">500</span><span class="irs-single" style="visibility: hidden; left: 44.389%;">-500 — 500</span></span><span class="irs-grid" style="width: 97.037%; left: 1.38148%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -2.86362%;">-1 000</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -2.18943%;">-500</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -1.02431%;">0</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -1.95988%;">500</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -2.63406%;">1 000</span></span><span class="irs-bar" style="left: 25.7407%; width: 48.5185%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-slider from" style="left: 24.2593%;"></span><span class="irs-slider to type_last" style="left: 72.7778%;"></span></span><input type="text" class="rangeslider4 irs-hidden-input" name="example_name" value="" tabindex="-1" readonly="">
                  </div><!-- col-6 -->
                </div><!-- row -->
      
                <hr class="mg-y-30">
      
                <div class="az-content-label mg-b-5">Range Slider (Modern Skin)</div>
                <p class="mg-b-20">Below is the modern skin slider default.</p>
      
                <div class="row row-sm">
                  <div class="col-lg-6">
                    <span class="irs js-irs-1 irs-modern"><span class="irs"><span class="irs-line" tabindex="0"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: hidden;">10</span><span class="irs-max" style="visibility: visible;">100</span><span class="irs-from" style="visibility: hidden;">0</span><span class="irs-to" style="visibility: hidden;">0</span><span class="irs-single" style="left: -0.485148%;">10</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 1.48148%; width: 0%;"></span><span class="irs-bar-edge"></span><span class="irs-shadow shadow-single" style="display: none;"></span><span class="irs-slider single" style="left: 0%;"></span></span><input type="text" class="rangeslider1 irs-hidden-input" name="example_name" data-extra-classes="irs-modern" tabindex="-1" readonly="">
                  </div><!-- col-6 -->
                  <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                    <span class="irs js-irs-4 irs-modern"><span class="irs"><span class="irs-line" tabindex="0"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: visible;">100</span><span class="irs-max" style="visibility: visible;">1 000</span><span class="irs-from" style="visibility: hidden;">0</span><span class="irs-to" style="visibility: hidden;">0</span><span class="irs-single" style="left: 47.5135%;">550</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 1.48148%; width: 48.5185%;"></span><span class="irs-bar-edge"></span><span class="irs-shadow shadow-single" style="display: none;"></span><span class="irs-slider single" style="left: 48.5185%;"></span></span><input type="text" class="rangeslider2 irs-hidden-input" name="example_name" data-extra-classes="irs-modern" tabindex="-1" readonly="">
                  </div><!-- col-6 -->
                </div><!-- row -->
                <div class="row row-sm mg-t-40">
                  <div class="col-lg-6">
                    <span class="irs js-irs-7 irs-modern irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: visible;">$0</span><span class="irs-max" style="visibility: visible;">$1 000</span><span class="irs-from" style="visibility: visible; left: 17.8825%;">$200</span><span class="irs-to" style="visibility: visible; left: 76.1047%;">$800</span><span class="irs-single" style="visibility: hidden; left: 43.7326%;">$200 — $800</span></span><span class="irs-grid" style="width: 97.037%; left: 1.38148%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -1.02431%;">0</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -1.95988%;">250</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -1.95988%;">500</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -1.95988%;">750</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -2.63406%;">1 000</span></span><span class="irs-bar" style="left: 20.8889%; width: 58.2222%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-slider from" style="left: 19.4074%;"></span><span class="irs-slider to type_last" style="left: 77.6296%;"></span></span><input type="text" class="rangeslider3 irs-hidden-input" name="example_name" data-extra-classes="irs-modern" tabindex="-1" readonly="">
                  </div><!-- col-6 -->
                  <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                    <span class="irs js-irs-10 irs-modern irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: visible;">-1 000</span><span class="irs-max" style="visibility: visible;">1 000</span><span class="irs-from" style="visibility: visible; left: 22.9986%;">-500</span><span class="irs-to" style="visibility: visible; left: 71.7728%;">500</span><span class="irs-single" style="visibility: hidden; left: 44.389%;">-500 — 500</span></span><span class="irs-grid" style="width: 97.037%; left: 1.38148%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -2.86362%;">-1 000</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -2.18943%;">-500</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -1.02431%;">0</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -1.95988%;">500</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -2.63406%;">1 000</span></span><span class="irs-bar" style="left: 25.7407%; width: 48.5185%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-slider from" style="left: 24.2593%;"></span><span class="irs-slider to type_last" style="left: 72.7778%;"></span></span><input type="text" class="rangeslider4 irs-hidden-input" name="example_name" data-extra-classes="irs-modern" tabindex="-1" readonly="">
                  </div><!-- col-6 -->
                </div><!-- row -->
      
                <hr class="mg-y-30">
      
                <div class="az-content-label mg-b-5">Range Slider (Outline Skin)</div>
                <p class="mg-b-20">Below is the outline skin slider default.</p>
      
                <div class="row row-sm">
                  <div class="col-lg-6">
                    <span class="irs js-irs-2 irs-outline"><span class="irs"><span class="irs-line" tabindex="0"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: hidden;">10</span><span class="irs-max" style="visibility: visible;">100</span><span class="irs-from" style="visibility: hidden;">0</span><span class="irs-to" style="visibility: hidden;">0</span><span class="irs-single" style="left: -0.485148%;">10</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 1.48148%; width: 0%;"></span><span class="irs-bar-edge"></span><span class="irs-shadow shadow-single" style="display: none;"></span><span class="irs-slider single" style="left: 0%;"></span></span><input type="text" class="rangeslider1 irs-hidden-input" name="example_name" data-extra-classes="irs-outline" tabindex="-1" readonly="">
                  </div><!-- col-6 -->
                  <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                    <span class="irs js-irs-5 irs-outline"><span class="irs"><span class="irs-line" tabindex="0"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: visible;">100</span><span class="irs-max" style="visibility: visible;">1 000</span><span class="irs-from" style="visibility: hidden;">0</span><span class="irs-to" style="visibility: hidden;">0</span><span class="irs-single" style="left: 47.5135%;">550</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 1.48148%; width: 48.5185%;"></span><span class="irs-bar-edge"></span><span class="irs-shadow shadow-single" style="display: none;"></span><span class="irs-slider single" style="left: 48.5185%;"></span></span><input type="text" class="rangeslider2 irs-hidden-input" name="example_name" data-extra-classes="irs-outline" tabindex="-1" readonly="">
                  </div><!-- col-6 -->
                </div><!-- row -->
                <div class="row row-sm mg-t-40">
                  <div class="col-lg-6">
                    <span class="irs js-irs-8 irs-outline irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: visible;">$0</span><span class="irs-max" style="visibility: visible;">$1 000</span><span class="irs-from" style="visibility: visible; left: 17.8825%;">$200</span><span class="irs-to" style="visibility: visible; left: 76.1047%;">$800</span><span class="irs-single" style="visibility: hidden; left: 43.7326%;">$200 — $800</span></span><span class="irs-grid" style="width: 97.037%; left: 1.38148%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -1.02431%;">0</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -1.95988%;">250</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -1.95988%;">500</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -1.95988%;">750</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -2.63406%;">1 000</span></span><span class="irs-bar" style="left: 20.8889%; width: 58.2222%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-slider from" style="left: 19.4074%;"></span><span class="irs-slider to type_last" style="left: 77.6296%;"></span></span><input type="text" class="rangeslider3 irs-hidden-input" name="example_name" data-extra-classes="irs-outline" tabindex="-1" readonly="">
                  </div><!-- col-6 -->
                  <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                    <span class="irs js-irs-11 irs-outline irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: visible;">-1 000</span><span class="irs-max" style="visibility: visible;">1 000</span><span class="irs-from" style="visibility: visible; left: 22.9986%;">-500</span><span class="irs-to" style="visibility: visible; left: 71.7728%;">500</span><span class="irs-single" style="visibility: hidden; left: 44.389%;">-500 — 500</span></span><span class="irs-grid" style="width: 97.037%; left: 1.38148%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -2.86362%;">-1 000</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -2.18943%;">-500</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -1.02431%;">0</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -1.95988%;">500</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -2.63406%;">1 000</span></span><span class="irs-bar" style="left: 25.7407%; width: 48.5185%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-slider from" style="left: 24.2593%;"></span><span class="irs-slider to type_last" style="left: 72.7778%;"></span></span><input type="text" class="rangeslider4 irs-hidden-input" name="example_name" data-extra-classes="irs-outline" tabindex="-1" readonly="">
                  </div><!-- col-6 -->
                </div><!-- row -->
      
                <div class="ht-40"></div>
      
      
                <div class="az-footer mg-t-auto">
                  <div class="container">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
                  </div><!-- container -->
                </div><!-- az-footer -->
              </div><!-- az-content-body -->
            </div><!-- container -->
          </div>
  

