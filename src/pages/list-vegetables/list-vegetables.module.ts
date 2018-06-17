import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { ListVegetablesPage } from './list-vegetables';

@NgModule({
  declarations: [
    ListVegetablesPage,
  ],
  imports: [
    IonicPageModule.forChild(ListVegetablesPage),
  ],
})
export class ListVegetablesPageModule {}
