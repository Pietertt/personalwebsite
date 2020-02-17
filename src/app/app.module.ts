import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HttpClientModule } from '@angular/common/http'; 

import { AppComponent } from './app.component';
import { AboutComponent } from './about/about.component';
import { MenuComponent } from './menu/menu.component';
import { IndexComponent } from './index/index.component';
import { PortfolioComponent } from './portfolio/portfolio.component';
import { ContactComponent } from './contact/contact.component';
import { ItemComponent } from './item/item.component';

const routes: Routes = [
      { path: "", component: IndexComponent },
      { path: "about", component: AboutComponent },
      { path: "portfolio", component: PortfolioComponent }, 
      { path: "contact", component: ContactComponent },
      { path: "item/:id", component: ItemComponent}
];

@NgModule({
  declarations: [
    AppComponent,
    AboutComponent,
    MenuComponent,
    IndexComponent,
    PortfolioComponent,
    ContactComponent,
    ItemComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(routes),
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
