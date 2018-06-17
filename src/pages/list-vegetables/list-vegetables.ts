import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

/**
 * Generated class for the ListVegetablesPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-list-vegetables',
  templateUrl: 'list-vegetables.html',
})
export class ListVegetablesPage {

  vegetables: any;

  constructor(public navCtrl: NavController, public navParams: NavParams) {
    this.vegetables = [
      'Alface',
      'Couve',
      'Tomate',
      'Abóbora'
    ]
  }


  ionViewDidLoad() {
    console.log('ionViewDidLoad ListVegetablesPage');
  }

}
