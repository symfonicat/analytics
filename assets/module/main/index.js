const mod = 'symfonicat/analytics/main'
      mod.log('module active!')

const run = async () => {
    
    const result = await mod.json({
        test: true,
    })

    mod.log('/m/symfonicat/analytics/main result:', result)
}

await run()
