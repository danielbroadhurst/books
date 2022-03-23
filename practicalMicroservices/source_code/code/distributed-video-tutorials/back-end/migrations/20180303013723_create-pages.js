/***
 * Excerpted from "Practical Microservices",
 * published by The Pragmatic Bookshelf.
 * Copyrights apply to this code. It may not be used to create training material,
 * courses, books, articles, and the like. Contact us if you are in doubt.
 * We make no guarantees that this code is fit for any purpose.
 * Visit http://www.pragmaticprogrammer.com/titles/egmicro for more book information.
***/
exports.up = knex =>
  knex.schema.createTable('pages', table => {
    table.string('page_name').primary()

    table.jsonb('page_data').defaultsTo('{}')
  })

exports.down = knex => knex.schema.dropTable('pages')
