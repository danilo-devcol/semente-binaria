import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

import {Observable} from "rxjs/Observable";
import {Resources} from "../../environment-variables/production";


/*
  Generated class for the ProdutoProvider provider.

  See https://angular.io/guide/dependency-injection for more info on providers
  and Angular DI.
*/
@Injectable()
export class ProdutoProvider {
  public urlProdutos;

  constructor(public http: HttpClient) {
    this.urlProdutos = 'https://devcol.com.br/backend-hackathon/public/api' + '/produtos'
  }

  public findAll():Observable<any>{
    return this.http.get(this.urlProdutos)
  }
}
