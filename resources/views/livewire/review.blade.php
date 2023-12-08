<div>
  {{-- -- Assuming you have a table named 'your_table' and want to retrieve data with pagination --}}

<script>
  DECLARE @PageSize INT = 10; 
DECLARE @PageNumber INT = 1; 

SELECT *
FROM your_table
ORDER BY your_column
OFFSET (@PageNumber - 1) * @PageSize ROWS
FETCH NEXT @PageSize ROWS ONLY;
</script>

</div>