SELECT * FROM books 
INNER JOIN categories ON books.id = category.book_id 
INNER JOIN authors on books.author_id = authors.id;  
