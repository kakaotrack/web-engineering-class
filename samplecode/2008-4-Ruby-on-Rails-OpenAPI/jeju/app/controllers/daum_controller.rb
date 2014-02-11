class DaumController < ApplicationController
  
def index
  
end

    def search
      @items = Image.search(params[:q])['item']
      @items.concat Video.search(params[:q])['item']

      render :partial => "item"
    end

end
