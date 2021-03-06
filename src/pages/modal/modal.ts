import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, ViewController } from 'ionic-angular';

/**
 * Generated class for the ModalPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-modal',
  templateUrl: 'modal.html',
})
export class ModalPage {
  data: any;

  constructor(private navCtrl: NavController, private navParams: NavParams, private viewCtrl: ViewController) {

  }

  ionViewWillLoad() {
   this.data = this.navParams.get('data');
  }
  dismiss() {
    this.viewCtrl.dismiss();
  }
}
