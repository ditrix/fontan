<?php ?>

<div class="contacts-section content-img">

     <img src="<?=$template_root?>/img/contacts_bg.png" alt="контакти"> 

      <div class="contacts_content" >

          <a name="contacts"></a>

          <div class="container">

          <div class="row">

            <div class="col-sm-12 text-center">

              <h2>Наші контакти</h2>

            </div>

          </div>

          <br><br><br>

          <div class="row">

            <table style="margin: 0 auto;" cellspacing="10" cellpadding="10">

               <tbody>

                 <tr>

                   <td>



              <div class="text-left addres">
                  <p>м. Київ, вул. Набережно-Лугова, 12</p>
                  <p>+38 044 33 777 03</p>
                  <p>м. Івано-Франківськ, вул. Зарічна 47, корп. 1</p>
                  <p>+380681795921</p>
                  <p>м. Краматорськ, вул. Магнітогорська, 9 оф. 5</p>
                  <p>+380953993270</p>
                  <p>office@fontann.com.ua</p>
			  
               <div class="map">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.0693751873605!2d30.502841816478206!3d50.477052179479124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce0e925a3adf%3A0x349651e1a96c0eac!2z0YPQuy4g0J3QsNCx0LXRgNC10LbQvdC-LdCb0YPQs9C-0LLQsNGPLCAxMiwg0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1547393136567" width="480" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>  

              </div>  
			  
                   </td>
			  
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			       
			             <td>
			  
			        <div class="form_call text-right" style="margin-top: -340px;">

                    <form class="text-left" id="contact" action="/wp-content/themes/fontan/mail.php" method="post">

                        <div class="form_title text-center">ЗАМОВИТИ ДЗВІНОК</div>

                        <span>Ваше ім'я:</span>
                        <input type="hidden" name="current_url" value="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
                        <input type="text" name="name" id="author" />

                        <span>Ваш телефон:</span>

                        <input type="text" name="phone" id="phone" />

                        <span>Ваш e-mail:</span>

                        <input type="text" name="email" id="email" />

                        <span>Задати питання:</span>                        
                         <textarea name="coment" cols="10" rows="10" ></textarea>

                        <div  class="submit_btn"> 

                        <input type="submit" id="submit" value="НАДІСЛАТИ > ">

                        </div>

                    </form>  

                  </div>  



                 

                     

                   </td>

                 </tr>

               </tbody>

            </table>

          </div>  

          <br><br><br>

        </div>

    </div>      



</div>


</div>  

</div>

