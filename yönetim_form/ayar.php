<?php 
include("ustmenu.php");
  ?>   
        <div class="page-wrapper">
            <div class="container-fluid">
             <div class="page-title">
                 <div class="title-left">
                     <h3>Ayarlar</h3>
                 </div>
             </div>


               <div class="row">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-block">    

                          
                                <?php 
                                if (isset($_GET['Durum']))
                                    {
                                        if ($_GET['Durum']) {
                                            ?> 
                         <div class="alert alert-success" role="alert">Güncelleme Yapıldı</div>  
                                       <?php
                                        }else
                                        {

                                            ?> 
                         <div class="alert alert-warning" role="alert">Güncelleme Yapılamadı</div>  
                                       <?php
                                   }
                                    }
                                   
                                     ?>
                                    
                                
                              
                             <form class="form-horizontal form-material" action="ayar_guncelle.php" method="POST">
                              <p>Web Sayfanızın ayarlarını düzenleyebileceğiniz sayfadır.</p>
                              <span class="section"><h3>Genel Ayarlar</h3> </span>
                                    <div class="form-group">
                                        <label class="col-md-12" for="ayar_baslik">Sitenin Başlığı</label>
                                        <div class="col-md-12">
                                            <input type="text" id="ayar_baslik" name="ayar_baslik" value="<?php echo $Ayar['ayar_baslik'] ?>" placeholder="Sitenin Başlığını Giriniz..." class="form-control form-control-line" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="ayar_aciklama">Sitenin Açıklamasi</label>
                                        <div class="col-md-12">
                                            <input type="text" id="ayar_aciklama" name="ayar_aciklama" value="<?php echo $Ayar['ayar_aciklama'] ?>" placeholder="Sitenin Açıklamasını Giriniz..." class="form-control form-control-line" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="ayar_anahtar">Anahtar Kelimeler</label>
                                        <div class="col-md-12">
                                            <input type="text" id="ayar_anahtar" name="ayar_anahtar" value="<?php echo $Ayar['ayar_anahtar'] ?>" placeholder="Anahtar Kelimeleri Giriniz..." class="form-control form-control-line" required="required">
                                        </div>
                                    </div>

                                    <span class="section"><h3>Sosyal Medya Hesapları</h3> </span>
                                    <div class="form-group">
                                        <label class="col-md-12" for="ayar_instegram">İnstegram</label>
                                        <div class="col-md-12">
                                            <input type="text" id="ayar_instegram" name="ayar_instegram" value="<?php echo $Ayar['ayar_instegram'] ?>" placeholder="İnstegram Adrenini Giriniz..." class="form-control form-control-line" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="ayar_facebook">Facebook</label>
                                        <div class="col-md-12">
                                            <input type="text" id="ayar_facebook" name="ayar_facebook" value="<?php echo $Ayar['ayar_facebook'] ?>" placeholder="Facebook Adresini Giriniz..." class="form-control form-control-line" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="ayar_twitter">Twitter</label>
                                        <div class="col-md-12">
                                            <input type="text" id="ayar_twitter" name="ayar_twitter" value="<?php echo $Ayar['ayar_twitter'] ?>" placeholder="Twitter Adresini Giriniz..." class="form-control form-control-line" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="ayar_youtube">Youtube</label>
                                        <div class="col-md-12">
                                            <input type="text" id="ayar_youtube" name="ayar_youtube" value="<?php echo $Ayar['ayar_youtube'] ?>" placeholder="Youtube Adresini Giriniz..." class="form-control form-control-line" required="required">
                                        </div>
                                    </div>

                                     <span class="section"><h3>Mail Ayarlar</h3> </span>
                                    <div class="form-group">
                                        <label class="col-md-12" for="ayar_mailsunucu">Mail Sunucu</label>
                                        <div class="col-md-12">
                                            <input type="text" id="ayar_mailsunucu" name="ayar_mailsunucu" value="<?php echo $Ayar['ayar_mailsunucu'] ?>" placeholder="Mail Sunucusunu Giriniz..." class="form-control form-control-line" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="ayar_port">Port Numarası</label>
                                        <div class="col-md-12">
                                            <input type="text" id="ayar_port" name="ayar_port" value="<?php echo $Ayar['ayar_port'] ?>" placeholder="Port Numarasını Giriniz..." class="form-control form-control-line" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="ayar_mailadres">Mail Adresi</label>
                                        <div class="col-md-12">
                                            <input type="text" id="ayar_mailadres" name="ayar_mailadres" value="<?php echo $Ayar['ayar_mailadres'] ?>" placeholder="Mail Adresini Giriniz..." class="form-control form-control-line" required="required">
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="col-md-12" for="ayar_mailsifre">Mail Şifresi</label>
                                        <div class="col-md-12">
                                            <input type="text" id="ayar_mailsifre" name="ayar_mailsifre" value="<?php echo $Ayar['ayar_mailsifre'] ?>" placeholder="Mail Şifresini Giriniz..." class="form-control form-control-line" required="required">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Güncelle</button>
                                        </div>
                                    </div>
                                </form>
                  </div>
               </div>

                   </div>
               </div>
            </div>
            
            
        <?php 
include("altmenu.php");
  ?> 
   