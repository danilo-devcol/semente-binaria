import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import {ListAnimalsPage} from "../list-animals/list-animals";
import {ListVegetablesPage} from "../list-vegetables/list-vegetables";


@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {
  listAnimals = ListAnimalsPage;
  listVegetables = ListVegetablesPage;

  constructor(public navCtrl: NavController) {

  }

}
