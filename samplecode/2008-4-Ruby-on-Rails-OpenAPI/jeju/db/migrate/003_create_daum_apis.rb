class CreateDaumAPIs < ActiveRecord::Migration
  def self.up
    create_table :daum_apis do |t|

      t.timestamps
    end
  end

  def self.down
    drop_table :daum_apis
  end
end
