<?php
function left($str, $length) {
    return substr($str, 0, $length);
}

while ($donnees = $tabU->fetch_assoc())
{
?>


        <!--Begin::Timeline 3 -->
        <div class="m-timeline-3">
          <div class="m-timeline-3__items">
            <div class="m-timeline-3__item m-timeline-3__item--info">
              <span class="m-timeline-3__item-time"><?php echo left($donnees['profil'],7); ?></span>
              <div class="m-timeline-3__item-desc">
                <span class="m-timeline-3__item-text">
              <h5><?php echo htmlspecialchars($donnees['UserName']); ?></h5>
                </span><br>
                <span class="m-timeline-3__item-user-name">
                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                  <h5>  <?php echo htmlspecialchars($donnees['date_creation']); ?></h5>
                  </a>
                </span>
                <span class="m-timeline-3__item-user-name">
                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                  <h5>  <?php echo htmlspecialchars($donnees['email']); ?></h5>
                  </a>
                  <button type="submit" name="action" class="btn btn-block btn-accent m-btn m-btn--air m-btn--custom" value="modif">Modifier</button>
                  <button type="submit" name="action" class="btn btn-block btn-danger m-btn m-btn--air m-btn--custom" value="supp">Supprimer</button>
                </span>
              </div>
            </div>
            <!--<div class="m-timeline-3__item m-timeline-3__item--warning">
              <span class="m-timeline-3__item-time">10:00</span>
              <div class="m-timeline-3__item-desc">
                <span class="m-timeline-3__item-text">
                  Lorem ipsum dolor sit amit
                </span><br>
                <span class="m-timeline-3__item-user-name">
                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                    By Sean
                  </a>
                </span>
              </div>
            </div>
            <div class="m-timeline-3__item m-timeline-3__item--brand">
              <span class="m-timeline-3__item-time">11:00</span>
              <div class="m-timeline-3__item-desc">
                <span class="m-timeline-3__item-text">
                  Lorem ipsum dolor sit amit eiusmdd tempor
                </span><br>
                <span class="m-timeline-3__item-user-name">
                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                    By James
                  </a>
                </span>
              </div>
            </div>
            <div class="m-timeline-3__item m-timeline-3__item--success">
              <span class="m-timeline-3__item-time">12:00</span>
              <div class="m-timeline-3__item-desc">
                <span class="m-timeline-3__item-text">
                  Lorem ipsum dolor
                </span><br>
                <span class="m-timeline-3__item-user-name">
                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                    By James
                  </a>
                </span>
              </div>
            </div>
            <div class="m-timeline-3__item m-timeline-3__item--danger">
              <span class="m-timeline-3__item-time">14:00</span>
              <div class="m-timeline-3__item-desc">
                <span class="m-timeline-3__item-text">
                  Lorem ipsum dolor sit amit,consectetur eiusmdd
                </span><br>
                <span class="m-timeline-3__item-user-name">
                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                    By Derrick
                  </a>
                </span>
              </div>
            </div>
            <div class="m-timeline-3__item m-timeline-3__item--info">
              <span class="m-timeline-3__item-time">15:00</span>
              <div class="m-timeline-3__item-desc">
                <span class="m-timeline-3__item-text">
                  Lorem ipsum dolor sit amit,consectetur
                </span><br>
                <span class="m-timeline-3__item-user-name">
                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                    By Iman
                  </a>
                </span>
              </div>
            </div>
            <div class="m-timeline-3__item m-timeline-3__item--brand">
              <span class="m-timeline-3__item-time">17:00</span>
              <div class="m-timeline-3__item-desc">
                <span class="m-timeline-3__item-text">
                  Lorem ipsum dolor sit consectetur eiusmdd tempor
                </span><br>
                <span class="m-timeline-3__item-user-name">
                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                    By Aziko
                  </a>
                </span>
              </div>
            </div>-->
          </div>
        </div>

        <!--End::Timeline 3 -->
<?php
}
?>
