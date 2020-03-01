import { Component, OnInit } from '@angular/core';
import { ItemService } from './../item.service';
import { HttpClient } from '@angular/common/http';
import { AppComponent } from '../app.component';

import { IItem } from './../item.model';

@Component({
      selector: 'app-portfolio',
      templateUrl: './portfolio.component.html',
      styleUrls: ['./portfolio.component.css']
})

export class PortfolioComponent implements OnInit {

      items: IItem[] = [];
      loading: boolean = false;

      constructor(private itemService: ItemService, private http: HttpClient) { }

      ngOnInit() {
            this.getItems();
      }

      getItems() {
            this.loading = true;
            this.itemService.fetchItems(10).subscribe(data => {
                  for(let i = 0; i < data.length; i++){
                        this.items.push(data[i]);
                  }
                  this.loading = false;
            });
      }

}
