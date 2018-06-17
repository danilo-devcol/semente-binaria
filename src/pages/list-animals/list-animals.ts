import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';


/**
 * Generated class for the ListAnimalsPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-list-animals',
  templateUrl: 'list-animals.html',
})
export class ListAnimalsPage {
  animals: any;

  constructor(public navCtrl: NavController, public navParams: NavParams) {
    this.animals = [
      'Queijo',
      'Ovos',
      'Frango'
    ];
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad ListAnimalsPage');
  }

}
