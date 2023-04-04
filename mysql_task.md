1. We have a data table (for example 100Gb) that is used for the reports. 
   We need to add column and apply new index strategy without locking it - how will you do it?
2. We have a 1MM mysql table of aggregation info which starts to work slow for reports. How to make it work fatser?  

3. We have a load on the mage the consist on 60% on same queries that are hitting db every call - how will you optimize?

4. How will you profile the query?

5. there is entities authors, books, categories. author may write several books, the book can belong to several categories;

5.1 how will look database

5.2 select authors Tom and Mike, their books and the categories of the books

5.3 how will you hold the data result in the php?

6. How else can we run this query. We do it with php. 
```
SELECT * FROM books 
INNER JOIN categories ON books.id = category.book_id 
INNER JOIN authors on books.author_id = authors.id;  
```
   
