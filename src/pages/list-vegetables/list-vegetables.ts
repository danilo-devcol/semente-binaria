import { Component } from '@angular/core';
import {IonicPage, ModalController, NavController, NavParams} from 'ionic-angular';
import {ProdutoProvider} from "../../providers/produto/produto";

@IonicPage()
@Component({
  selector: 'page-list-vegetables',
  templateUrl: 'list-vegetables.html',
  providers: [ProdutoProvider]
})

export class ListVegetablesPage {

  public vegetables = [];
  constructor(public navCtrl: NavController, public navParams: NavParams, private produtoservice : ProdutoProvider, private modalCtrl:ModalController) {
    this.getProdutos();
  }

  public getProdutos()
  {
    this.produtoservice.findAll().subscribe(response => response.produtos.map(
        produto=>{this.vegetables.push(produto.nome)}
      )
    );
  }

  openModal(data) {
    data = [
      {
        idcusto: 1,
        nome:'Sementes'
      },
      {
        idcusto: 2,
        nome:'Adubo'
      },
      {
        idcusto: 3,
        nome:'Irrigação'
      },
      {
        idcusto: 4,
        nome:'Sálario'
      },
      {
        idcusto: 5,
        nome:'Outros'
      }
    ];
    const modal = this.modalCtrl.create('ModalPage', {data: data});
    modal.present();
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad ListVegetablesPage');
  }

}
