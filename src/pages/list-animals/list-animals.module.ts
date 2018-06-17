import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { ListAnimalsPage } from './list-animals';

@NgModule({
  declarations: [
    ListAnimalsPage,
  ],
  imports: [
    IonicPageModule.forChild(ListAnimalsPage),
  ],
})
export class ListAnimalsPageModule {}
